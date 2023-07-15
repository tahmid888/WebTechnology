

<?php
include('../db/mydb.php');
$loginerr = "";
$unameerr = "";
$passworderr = "";

session_start();



if(isset($_POST["login"]))
 
{
 
    //header("location:../view/usersignup.php");
    
    $uname = $_POST['uname'];
    $password = $_POST['pass'];

    if ($uname != ""  || $pass != "")
    {
         $f = 0;
         $mydb = new db();
         $conn = $mydb->openCon();
         $results = $mydb->user_login($conn, "usersignup", $_POST["uname"], $_POST["pass"]);

        if ($results->num_rows > 0)
        {
        //echo "true";
        header("location: ../view/usernew.php");
         {
           foreach ($results as $user)
           {
               if ($user["uname"] == $_POST["uname"] && $user["pass"] == $_POST["pass"])
              {
                   $_SESSION['username'] = $user["uname"];
                    $_SESSION['password'] = $user["pass"];


                  if (!empty($_POST["remember"]))
                  {
                        setcookie("uname", $_SESSION['username'], time() + 60);
                       setcookie("pass", $_SESSION['password'], time() + 60);
                        echo "";
                   }
                   else
                   {
                        setcookie("uname", "");
                        setcookie("pass", "");
                      echo "";
                 }
        //             //header("location: ../View/adminhomepage.php");

              // header("location: http://localhost/lax/finalproject/view/usernew.php");
                }
            }
        }
    }
      /*  else if ($f == 0)
        {
            header("location: ../view/userlogin.php?login_info=incorrect");
            exit();
        } */
        
    }
    if (empty($uname) && empty($password))
     {
        $loginerr = "Fill all the fields!";
     } 
     else if (empty($uname))
     {
        $unameerr = "Enter your username";
     }
     else if (empty($password))
    {
         $passworderr = "Enter your password";
     }
}

