<?php

include("../db/mydb.php");
if(isset($_POST["submit"]))
{
   // $fname=$_POST["fname"];
   // $lname=$_POST["lname"];
    $uname=$_POST["uname"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $mobno=$_POST["mobno"];
    $nid=$_POST["nid"];
    $dob=$_POST["dob"];
    $city=$_POST["city"];
    $address=$_POST["address"];
    // $id = $_POST["id"]; 

    $mydb = new db();
         $conn = $mydb->openCon();
    $mydb->updateUser($mobno,$pass,$email,$nid,$dob, $city,$address,$uname,"usersignup",$conn);
}
if(isset($_POST['backs']))
{
    //header("location: ../view/userloginanother.php");
    header("location: ../view/usernew.php");
}




?>