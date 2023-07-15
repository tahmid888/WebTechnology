
<?php

include("../db/mydb.php");
//$mydb = new db();
//$myconn = $mydb -> openConn();
/*
$usernameErr = "";
$phoneErr="";
$nidErr="";
$emailErr="";

$dobErr="";
$cityErr ="";
$addressErr="";

$passwordErr="";
$password_cpasswordErr="";
*/
     $username = "";
    $phone = "";
    $nid = "";
    $email = "";

    $dob = "";
    $city   ="";
    $address  ="";
    
    
    $password = "";
    $cpassword ="";

$results="";





if(isset($_POST["search"]))
{
    $mydb = new db();
$myconn = $mydb -> openConn();
$username= $_POST["uname"];
$results = $mydb->searchUserbyUsername($username,"usernametable",$myconn);  // table create in db
   
if($results->num_rows>0)
    {
        while($myrow=$results->fetch_assoc())
{


    $username = $myrow["uname"];

    $phone = $myrow["phone"];
    $nid = $myrow["nid"];
    $email = $myrow["email"];

    $dob = $myrow["dob"];
    $city = $myrow["city"];
    $address = $myrow["address"];
    $password = $myrow["pass"];
    $cpassword = $myrow["cpassword"];





}
       

    }
}

if(isset($_POST["update"]))
{
    $mydb = new db();
    $myconn = $mydb -> openConn();
    $results = $mydb->updateProfile($_POST["uname"],$_POST["phone"],$_POST["nid"],$_POST["email"],$_POST["dob"],$_POST["city"],$_POST["address"],$_POST["pass"],$_POST["cpassword"],"manager",$myconn);
if($results===TRUE)
   {
    echo "Updated";
   }
   else{
    echo "Can't Update". $myconn->error;
   }    
}


?>