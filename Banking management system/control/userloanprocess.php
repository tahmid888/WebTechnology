

<?php

include("../db/mydb.php");


$branchErr = "";
$accountErr="";
$purposeErr="";
$experienceErr="";
$profileErr="";
$historyErr="";
$fileErr="";
$pinErr="";


if(isset($_POST['submit']))
{
    $branch = $_POST["branch"];
    $account = $_POST["account"];
    $purpose = $_POST["purpose"];
    $experience = $_POST["experience"];
    $profile = $_POST["profile"];
    $history = $_POST["history"];
    $file = $_FILES["file"]["name"];
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



    if (!preg_match ("/^[a-zA-z]*$/", $account) && is_numeric($account))
    {
        $accountErr = "Only alphabets and numeric values are allowed.";
    }
    if (empty( $afigures))
    {
        $accountErr = "Please enter account no";
    }

    echo '<br>';


    if (!preg_match ("/^[a-zA-z]*$/",$purpose))
    {
        $purposeErr = "Only alphabets and whitespace are allowed.";
    }
    if (empty( $branch))
    {
        $purposeErr = "Please enter purpose";
    }

    echo '<br>';


    if (!preg_match ("/^[a-zA-z]*$/",$experience) || is_numeric($experience))
    {
        $experienceErr = "Only alphabets and numeric values are allowed.";
    }
    if (empty( $afigures))
    {
        $experienceErr = "Please share your experience";
    }

    echo '<br>';




    if (!preg_match ("/^[a-zA-z]*$/",$profile))
    {
        $profileErr = "Only alphabets and whitespace are allowed.";
    }
    if (empty( $profile))
    {
        $profileErr = "Please enter profile specifically";
    }

    echo '<br>';


    if (!preg_match ("/^[a-zA-z]*$/", $history))
    {
        $historyErr = "Only alphabets and whitespace are allowed.";
    }
    if (empty(  $history))
    {
        $historyErr = "Please enter history";
    }



    if(move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["file"]["name"]))
    {
        $filepath = "../uploads/" . $_FILES["file"]["name"];
        $fileErr = "File Uploaded";
    }
    else
    {
        echo "";
    }



    if(!preg_match('/^[0-9]{10}+$/', $pin)) {
        $pinErr= "InValid PIN Number";
        } 
        if (empty( $pin)){
            $pinErr= "Enter PIN Number";
        }



     $mydb= new db();
        $myconn = $mydb->openCon();
       // $mydb->insertUser($username,$phone,$nid, $email, $sex,$dob,$city, $address, $userid,$bankusertype,$uploadphoto,$password,$cpassword,"userreg",$myconn);//,$file
        $mydb->insertUser4($branch, $account,  $purpose, $experience,$profile,$history,$file,$pin,"userloan",$myconn);//,$file



}


if(isset($_POST['back4']))
{
    //header("location: ../view/userloginanother.php");
    header("location: ../view/usernew.php");
}



?>