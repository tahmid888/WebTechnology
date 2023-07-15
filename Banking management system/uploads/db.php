<?php
class db
{
    function openCon()
    {
$servername="localhost";
$username="root";
$password="";
$dbname="finalproject";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    echo "error connecting db";
}
return $conn;
    }
function insertUser($fname,$lname,$uname,$mobno,$NID,$email,$address,$dob,$pass,$table,$conn)//,$file
{
$sqlstr="INSERT into $table (fname,lname,uname,mobno,NID,email,address,dob,password) 
VALUES ('$fname','$lname','$uname','$mobno','$NID','$email','$address','$dob','$pass')";//,picture ,'$file'
if($conn->query($sqlstr))
{
    echo "data inserted";
}
else
{
echo "failed".$conn->error;
} 
}
}
?>