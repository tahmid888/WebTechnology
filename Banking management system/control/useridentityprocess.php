


<?php
 include("../db/mydb.php");


$fileErr1="";
$fileErr2="";
$fileErr3="";
$fileErr4="";
$pinErr="";



if(isset($_POST['submit']))
{
  
    $file1 = $_FILES["file1"]["name"];
    $file2 = $_FILES["file2"]["name"];
    $file3 = $_FILES["file3"]["name"];
    $file4 = $_FILES["file4"]["name"];
    $pin = $_POST["pin"];

    if(move_uploaded_file($_FILES["file1"]["tmp_name"],"../uploads/" . $_FILES["file1"]["name"]))
    {
        $filepath = "../uploads/" . $_FILES["file1"]["name"];
        $fileErr1 = "File Uploaded";
        if (file_exists($filepath)) {
            $fileErr1= "Sorry, file already exists.";
            
          }
          if ($_FILES["file1"]["size"] > 500000) {
            $fileErr1= "Sorry, your file is too large.";
           
          }
    }
    else
    {
        echo "";
    }

    if(move_uploaded_file($_FILES["file2"]["tmp_name"],"../uploads/" . $_FILES["file2"]["name"]))
    {
        $filepath = "../uploads/" . $_FILES["file2"]["name"];
        $fileErr2 = "File Uploaded";

        if ($_FILES["file2"]["size"] > 500000) {
            $fileErr2= "Sorry, your file is too large.";

        }

    }
    else
    {
        echo "";
    }


    if(move_uploaded_file($_FILES["file3"]["tmp_name"],"../uploads/" . $_FILES["file3"]["name"]))
    {
        $filepath = "../uploads/" . $_FILES["file3"]["name"];
        $fileErr3 = "File Uploaded";
    }
    else
    {
        echo "";
    }




    if(move_uploaded_file($_FILES["file4"]["tmp_name"],"../uploads/" . $_FILES["file4"]["name"]))
    {
        $filepath = "../uploads/" . $_FILES["file4"]["name"];
        $fileErr4 = "File Uploaded";
        if (file_exists($filepath)) {
            $fileErr4= "Sorry, file already exists.";
            
          }
          if ($_FILES["file4"]["size"] > 500000) {
            $fileErr4= "Sorry, your file is too large.";
           
          }
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


        $mydb = new db();
        $myconn = $mydb->openCon();
        $mydb->inserUser6($file1,$file2,$file3,$file4,$pin,"useridentity", $myconn);
  




}
if(isset($_POST['back5']))
{
    //header("location: ../view/userloginanother.php");
    header("location: ../view/usernew.php");
}



?>
