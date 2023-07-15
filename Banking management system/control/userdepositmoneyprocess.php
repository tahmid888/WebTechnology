
<?php

include("../db/mydb.php");


$branchErr = "";
$accountErr="";
$afiguresErr="";
$pinErr="";


if(isset($_POST['submit']))
{
    $branch = $_POST["branch"];
    $account = $_POST["account"];
    $afigures = $_POST["afigures"];
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



    if (!preg_match ("/^[a-zA-z]*$/", $afigures) && is_numeric($afigures))
    {
        $accountErr = "Only alphabets and numeric values are allowed.";
    }
    if (empty( $afigures))
    {
        $accountErr = "Please enter account no";
    }

    echo '<br>';


    if(!is_numeric($afigures))
    {
        $afiguresErr = "Only digits  are allowed.";
    }
    if (empty( $amount))
    {
        $afiguresErr = "Please enter amount";
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
        $mydb->insertUser3($branch, $account,  $afigures, $pin,"userdepositmoney",$myconn);//,$file



}













if(isset($_POST['back4']))
{
    //header("location: ../view/userloginanother.php");
    header("location: ../view/usernew.php");
}



?>