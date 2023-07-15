<?php

include("../db/mydb.php");


$branchErr = "";
$sectionErr="";
$amountErr="";
$pinErr="";


if(isset($_POST['submit']))
{
    $branch = $_POST["branch"];
    $section = $_POST["section"];
    $amount = $_POST["amount"];
    $pin = $_POST["pin"];

  
    if (!preg_match ("/^[a-zA-z]*$/", $branch))
    {
        $branchErr = "Only alphabets and whitespace are allowed.";
    }
    if (empty( $branch))
    {
        $branchErr = "Please enter branch";
    }

    echo '<br>';



    if (!preg_match ("/^[a-zA-z]*$/", $section))
    {
        $sectionErr = "Only alphabets and whitespace are allowed.";
    }
    if (empty( $section))
    {
        $sectionErr = "Please enter section";
    }

    echo '<br>';


    if(!is_numeric($amount))
    {
        $amountErr = "Only digits  are allowed.";
    }
    if (empty( $amount))
    {
        $amountErr = "Please enter amount";
    }
    echo '<br>';



    if(!preg_match('/^[0-9]{10}+$/', $pin)) {
        $pinErr= "InValid PIN Number";
        } 
        if (empty( $pin)){
            $pinErr= "Enter PIN Number";
        }



        $mydb= new db();
        $myconn = $mydb->openCon();
       // $mydb->insertUser($username,$phone,$nid, $email, $sex,$dob,$city, $address, $userid,$bankusertype,$uploadphoto,$password,$cpassword,"userreg",$myconn);//,$file
        $mydb->insertUser($branch, $section, $amount, $pin,"userwidthraw",$myconn);//,$file



}


if(isset($_POST['back222']))
{
    //header("location: ../view/userloginanother.php");
    header("location: ../view/usernew.php");
}




?>