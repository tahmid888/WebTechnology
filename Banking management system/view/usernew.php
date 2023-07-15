

<?php
/*session_start();
if(empty($_SESSION["username"]) && empty($_SESSION["password"]))
{
  header("location: ../view/usernew.php");
}
*/

setcookie("user_detect","visited",time()+86400*30,"/");
if(isset($_COOKIE["user_detect"]))
{
  echo"</p> you have visited already<p>";
}
else {
  echo"<p>you are visiting first time<p>";
}


include("../control/userlogoutprocess.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/CSS" href="../css/userloginanother.css">
</head>
<body>

<center>
<form action="" method="POST" enctype="multipart/form-data">

<div class="form">
  
  <h3><b> <a href ="../view/userwidthraw.php" style="text-decoration: none;">Widthdraw money</a></b></h3>
  <h3><b> <a href ="../view/usertransfermoney.php" style="text-decoration: none;">Transfer money</a></b></h3>
  <h3><b> <a href ="../view/userdepositmoney.php" style="text-decoration: none;">Deposit money</a></b></h3>
  <h3><b> <a href ="../view/userloan.php" style="text-decoration: none;">Get loan</a></b></h3>
  <h3><b> <a href ="../view/useridentity.php" style="text-decoration: none;">Identity</a></b></h3>
  <h3><b> <a href ="../view/seller_update.php" style="text-decoration: none;">Update Info</a></b></h3>
  <h3><b> <a href ="../view/userreport.php" style="text-decoration: none;">Report</a></b></h3>

<h1><b>Do you want to <a href ="../view/userlogin.php">logout ?</a></b></h1>
</div>
</center>

</body>
</html>