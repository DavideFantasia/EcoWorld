<?php
            session_start();
            $_SESSION['adminAccess']=0;
            $nuser=$_REQUEST["newUser"];
            $npsw=$_REQUEST["newPsw"];
            
            if (!preg_match('/^[a-z]+[a-z0-9]*[.-_]*{5,16}$/i', $npsw))
            {
               echo "La password non è valida:<br>caratteri insufficienti o non adatti";
            }
            else {
              
                        $database= new mysqli("localhost","root","","ecoworld");
            
                        if($database->connect_error)
                                    echo $database->connect_errno;
                        else
                        {
                                    #ricerca se l'utente è già presente nel database
                                    $query = "SELECT * FROM utente WHERE username='$nuser'";
                                    $result=mysqli_query($database,$query);
                                    $nrows=mysqli_num_rows($result);
                                    if($nrows>0)
                                                echo "<a href='iscrizione.html'>nome utente già esistente, sceglierne un altro</a>";
                                     else
                                    {
                                                $dataAcquisto=date('y-m-d');
                                                $query = "INSERT INTO utente(username,psw,data_acquisto) VALUE('$nuser','$npsw','$dataAcquisto')";
                                                $result=mysqli_query($database,$query);
                        
                                                header("Location: login.html");
                                    }
               
                        }
            
                        $database->close();
               
            }
            
            
?>