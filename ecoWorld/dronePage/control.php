<html>
    <head>
        <link rel="stylesheet" href="styleController.css">
        <title>Controller</title>
    </head>
    
    <body>
     <form method="post">
        <table id="movement_table">
            <tr>
                <td>      </td>
                <td>    <input type="submit" id="submit-up" name="up" value="up"/>  </td>
                <td>    </td>
                <td rowspan="3">
                    <video width="300" height="300" controls>
                        <source src="0.0.0.0:11111" type="video/ogg">
                           Your browser does not support the video tag.
                     </video>
                </td>
                <td>    </td>
                <td>    <input type="submit" id="submit-tc" name="turnClock" value="tc" />  </td>
            </tr>
            <tr>
                <td> <input type="submit" id="submit-left" name="left" value="left"/> </td>
                <td>      </td>
                <td>    <input type="submit" id="submit-right" name="right" value="right"/>    </td>
                <td>    </td>
                 <td>    <input type="submit" id="submit-tAC" name="turnAClock" value="tAC" />  </td>
            </tr>
            <tr>
                <td>      </td>
                <td>    <input type="submit" id="submit-down" name="down" value="down"/>  </td>
                <td>    </td>
                <td>    </td>
                <td>  <input type="submit" id="submit-video" name="video" value="video"/>    </td>
            </tr>
        </table>
        
        <table id="movement_ToL">
            <tr>
                <td>   <input type="submit" id="submit-takeoff" name="takeoff" value="takeoff"/>   </td>
                <td>    <input type="submit" id="submit-land" name="land" value="land" />  </td>
                <td>    <input type="submit" id="submit-power" name="power" value="power" />  </td>
            </tr>
        </table>
        <table id="submitTable">
            <tr>
                <td>
                   <input type="text" placeholder="insert commands" name="commandString"/>
                    <input type="submit" placehold="send" name="submit"/> 
                </td>
            </tr>
            
        </table>
    </form>
    </body>
</html>

<?php
   session_start();
   
   #il file command.txt serve per passare gli input dal sito al file python
   $file = fopen("command.txt","w");
   #questa serie di IF va a leggere quale tasto viene premuto, per poi scrivere il comando in chiaro che verrà sottoposto al drone.
   #il primo comando dovrà sempre essere "command"
   #l'ultimo dovrà essere "end"
   #per attivare lo stream video si dovrà usare il comando "streamon"
   sleep(2);
   #ora come ora, lo script in python va avviato manualmente
    if(isset($_POST["commandString"]))
    {
      $commandString=$_POST["commandString"];
      fwrite($file,$commandString);
    }
   if(isset($_POST["up"]))
   {
      fwrite($file,"forward 50");
   }     
    else if(isset($_POST["turnClock"]))
    {
       fwrite($file,"cw 90");
    } 
        else if(isset($_POST["left"]))
        {
            fwrite($file,"left 50");
        }
                else if(isset($_POST["right"]))
                {
                  fwrite($file,"right 50");
                }
                        else if(isset($_POST["turnAClock"]))
                        {
                           fwrite($file,"ccw 90");
                        }
                                else if(isset($_POST["down"]))
                                {
                                    fwrite($file,"back 50");
                                }
                                        else if(isset($_POST["video"]))
                                            fwrite($file,"streamon");
                                                else if(isset($_POST["takeoff"]))
                                                {
                                                   fwrite($file,"takeoff");
                                                   echo "take off ";
                                                }
                                                   else if(isset($_POST["land"]))
                                                   {
                                                      fwrite($file,"land");
                                                      echo "land ";
                                                   } 
                                                      else if(isset($_POST["power"]))  #se si accede per la prima volta al sito, la prima volta che si cliccherà
                                                                                       #il tasto power, si avvierà il drone,
                                                                                       #mandando il comando "command", per tutti gli altri accessi,
                                                                                       #si manderà il comando "end"
                                                      {
                                                         if($_SESSION['adminAccess']==1)
                                                         {
                                                            echo "command ";
                                                            #test per avviare lo script direttamente dal php
                                                            $openingPython = "C:\Users\Davide\AppData\Local\Programs\Python\Python39\python.exe C:/xampp/htdocs/ecoWorld/dronePage/commandSender.py";
                                                            passthru($openingPython);
                                                            fwrite($file,"command");
                                                            sleep(1);
                                                         }else if($_SESSION['adminAccess']>1)
                                                            {
                                                             fwrite($file,"end");
                                                              echo "end ";
                                                               $_SESSION['adminAccess']=0;
                                                            }
                                                      
                                                      } 
   fclose($file);
   sleep(1);
   $outputFile = fopen("output.txt","r"); #lettura della risposta del drone, passata tramite il python e scritta sul file output.txt
   echo "result: ".fread($outputFile,filesize("output.txt"));
   fclose($outputFile);
   $_SESSION['adminAccess']++;   
?>