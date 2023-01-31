<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
   <link rel="stylesheet" href="style.css">
	<title>Login</title>
   </head>

    <body>
      <div class="login-header">
      <h1>
        <?php
            session_start();
            $_SESSION['adminAccess']=0;
            $user=$_REQUEST["user"];
            $psw=$_REQUEST["psw"];
            
            $database= new mysqli("localhost","root","","ecoworld");
            
            $validate = '/^[a-z]+[a-z0-9]*[.-_]*{5,16}$/i';
            
            if ((preg_match($validate , $user)==true) && (preg_match($validate ,$psw)==true))
            {
               if($database->connect_error)
                  echo $database->connect_errno;
               else
               {
                  $query = "SELECT * FROM utente WHERE username='$user' AND psw='$psw'";
                  $result=mysqli_query($database,$query);
                  $dato=mysqli_fetch_assoc($result);
                  $nrows=mysqli_num_rows($result);
   
                  if($nrows>0)
                  {
                     #echo "benvenuto ",$user;
                     $_SESSION['loginInfo']['ID_scienziato']=NULL;
                     $_SESSION['loginInfo']=$dato;
                     header("Location: ../index.php");
                     #echo "benvenuto ",$_SESSION['loginInfo']['username'];
      
                  }else
                  {
                     $query = "SELECT * FROM scienziato WHERE username='$user' AND psw='$psw'";
                     $result=mysqli_query($database,$query);
                     $dato=mysqli_fetch_assoc($result);
                     $nrows=mysqli_num_rows($result);
                     if($nrows>0)
                     {
                        $_SESSION['loginInfo']['ID_utente']=NULL;
                        $_SESSION['loginInfo']=$dato;
                        header("Location: ../index.php");
                        #echo "benvenuto ",$_SESSION['loginInfo']['nome'];
                        #echo "benvenuto dottor ",$dato['nome'];
                     }
                     else
                        echo "login errato";
                  }
               }
            }else
            {
               echo "caratteri non validi<br> <a href='login.html'>riprovare</a>";
            }
            $database->close();
        ?>
      </h1>
      </div>
    </body>
</html>

