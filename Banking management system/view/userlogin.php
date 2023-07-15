<?php

@include("../control/signinprocess.php");
/*
if (isset($_SESSION['username'])) {
    header("location: ../view/userlogin.php"); // maybe changed 
} */
setcookie("Tahmidul","visited",time()+86400*30,"/");
if(isset($_COOKIE["Tahmidul"]))
{
  echo"";
}
else {
    echo"<p>you are visiting first time<p>";
  }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign In</title>
    <link rel="stylesheet" type="text/CSS" href="../css/userlogincss.css">
</head>

<body>
    <div class="center">
    <center>
        <h1>City Bank Limited</h1><br>
        <h5>Please Login to the User</h5><br>

        <form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td>

                        <lable>User name:</lable>
                        <input type="text" name="uname" id="uname" placeholder="Enter username"><br><br>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Password:&nbsp;&nbsp; </label>
                            <input type="text" name="pass" placeholder="Enter password"> <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="checkbox" name="remember" id="remember">Remember Me
                        
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <?php

                            echo $loginerr;
                            echo $unameerr;
                            echo $passworderr;

                           ?>
                            <br>

                            <input type="submit" name="login" value="Login">
                            <a class="registrationbtn" href="../view/usersignup.php">Sign Up</a>
                        </td>
                    </tr>
                    </div>
                </table>
            </center>
    </center>
</body>

</html>
