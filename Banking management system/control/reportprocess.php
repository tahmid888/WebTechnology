
<?php
include("../db/mydb.php");

if(isset($_POST['submit']))
{

    $report = $_POST["report"];

    $mydb = new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser233($report,"report", $myconn);



}

if(isset($_POST['back55']))
{
    //header("location: ../view/usersecoundlogin.php");
    header("location: ../view/usernew.php");
}
?>