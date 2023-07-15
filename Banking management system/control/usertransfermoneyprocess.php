<?php



include("../db/mydb.php");


$dbankErr = "";
$referenceErr="";
$amountErr="";
$pinErr="";


if(isset($_POST['submit']))
{
    $branch = $_POST["dbank"];
    $amount = $_POST["amount"];
    $reference = $_POST["reference"];
    $pin = $_POST["pin"];

  
    if (!preg_match ("/^[a-zA-z]*$/", $branch))
    {
        $dbankErr = "Only alphabets and whitespace are allowed.";
    }
    if (empty( $branch))
    {
        $dbankErr = "Please enter branch";
    }

    echo '<br>';



    if (!preg_match ("/^[a-zA-z]*$/", $reference))
    {
        $referenceErr = "Only alphabets and whitespace are allowed.";
    }
    if (empty( $reference))
    {
        $referenceErr = "Please enter your reference";
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
        $mydb->insertUser2($branch, $amount,$reference, $pin,"usertransfermoney",$myconn);//,$file



}





if(isset($_POST['back3']))
{
   // header("location: ../view/userloginanother.php");
   header("location: ../view/usernew.php");
}



?>