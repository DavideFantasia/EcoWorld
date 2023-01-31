import threading
import socket
import os
import h264decoder
import numpy as np
import ffmpeg
#cercando in giro, ho trovato un codice prefatto che utilizzava questa libreria per leggere i frame in locale
#al momento non sono riuscito a farla funzionare
import sys
import time

host = ''
port = 9000

#decoder = h264decoder.H264Decoder()
locaddr = (host ,port)  #local info
frame = None
# Create a UDP socket
sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
# Create an UDP socket for the video thread
socket_video = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)  # socket for receiving video stream
local_video_port = 11111  # port for receiving video stream

tello_address = ('192.168.10.1', 8889)  #8889 is the Tello's UDP port for receiving SDK command
sock.bind(locaddr)

#for reading the Tello's response to the sdk commands
#and printing it on the "output.txt" file, that will be read by the php file
def recv():
    count = 0
    while True:
        outputFile = open("output.txt", "w")
        try:
            data, server = sock.recvfrom(1518)
            print(data.decode(encoding="utf-8"))
            outputFile.writelines(data.decode(encoding="utf-8"))
        except Exception:
            print ('\nExit . . .\n')
            outputFile.writelines("exit...")
            break

#recvThread create
recvThread = threading.Thread(target=recv)
recvThread.start()
prev="initialization" #for avoiding input loop
msg='command' #initial msg to start the sdk mode in the drone
while True:
    file = open("command.txt", "r") #file the input from php
    try:

        if os.path.exists("command.txt"):   #if the file exist
            msg = file.readline()
            if msg != prev: #for avoiding loops
                prev=msg
                print(msg)  #log
                if 'end' in msg:    #for turning off the drone
                     # print ('...')
                    sock.close()
                    socket_video.close()
                    break
                if 'streamoff' in msg:
                    os.system("taskkill /IM ""ffplay.exe"" /F")
                # Send data
                msg = msg.encode(encoding="utf-8")
                sent = sock.sendto(msg, tello_address)

                if 'streamon' in msg.decode(encoding="utf-8"):   #to activate the video-stream
                    videoThread = threading.Thread(target=receive_video_thread)
                    videoThread.start()
        else:
            print("file not found")
            break
        file.close()

        if not msg:
            break



    except KeyboardInterrupt:
        print ('\n . . .\n')
        sock.close()

        break

#non so esattamente bene cosa stia succedendo qua, in quanto l'ho presa adattandola un minimo dal codice di sample
    def receive_video_thread():
        command="ffmpeg -i udp://0.0.0.0:11111 -f sdl ""Tello""  -preset slow -codec:a libfdk_aac -b:a 128k -codec:v libx264 -pix_fmt yuv420p -b:v 1000k -minrate 500k -maxrate 2000k -bufsize 2000k -vf scale=854:480 127.0.0.1:8080/stream.mp4"
        ffplaycommand= "ffplay -probesize 32 -i udp://192.168.10.1:11111 -framerate 60"
        testCommand = "ffmpeg -i udp://0.0.0.0:11111 -f sdl ""Tello""  -preset slow -codec:a libfdk_aac -b:a 128k -codec:v libx264 -pix_fmt yuv420p -b:v 1000k -minrate 500k -maxrate 2000k -bufsize 2000k -vf scale=854:480 ""C:/xampp/htdocs/ecoWorld/dronePage/stream.mp4"
        jpegTest = "ffmpeg -f rawvideo -pixel_format yuv420p -i udp://0.0.0.0:11111 C:/xampp/htdocs/ecoWorld/frame.jpeg"
        os.system(ffplaycommand)

    def h264_decode(packet_data):
        """
        decode raw h264 format data from Tello

        :param packet_data: raw h264 data array

        :return: a list of decoded frame
        """
        res_frame_list = []
        #frames = decoder.decode(packet_data)
        frames = 0
        for framedata in frames:
            (frame, w, h, ls) = framedata
            if frame is not None:
                print ('frame size %i bytes, w %i, h %i, linesize %i' % (len(frame), w, h, ls))

                frame = np.fromstring(frame, dtype=np.ubyte, count=len(frame), sep='')
                frame = (frame.reshape((h, ls / 3, 3)))
                frame = frame[:, :w, :]
                res_frame_list.append(frame)

        return res_frame_list