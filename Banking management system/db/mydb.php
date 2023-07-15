<?php

class db
{
    function openCon()
    {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="bankinmanagmentsystemmmm";

        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            echo "error connecting db";
        }
        return $conn;
    }

   

    function updateUser($mobno,$pass,$email,$nid,$dob, $city,$address,$uname,$table,$conn)
    {
        $sqlstr = "UPDATE usersignup SET      phone='$mobno', password = '$pass', email='$email' ,nid='$nid',dob='$dob',city=' $city',address='$address' WHERE username='$uname'";
   // $sqlstr = "UPDATE usersignup SET  username='$uname', password = '$pass', email='$email' WHERE phone='$mobno'";
    if($conn->query($sqlstr))
    {
        echo "data updated successfully";
    }
    else
    {
    echo "failed".$conn->error;
    } 
    }

    function insertUser233( $report, $table, $conn)
    {
        $sqlstr = "INSERT INTO $table (report) 
        VALUES ('$report')";
       // return $conn->query($sqlstr);
        if($conn->query($sqlstr))
    {
    echo "data inserted";
    }
    else
    {
       echo "failed".$conn->error;
    } 
    }










  
    function user_login($conn, $usersignup, $uname, $pass)
    {
        $sqlstr = "SELECT username, password FROM $usersignup WHERE username = '$uname' AND password = '$pass'";
        return $conn->query($sqlstr);
       /* if($conn->query($sqlstr))
        {
            echo "data inserted";
        } */
    }


   
    
    function insertUser( $branch, $section, $amount, $pin, $table, $conn)
    {
        $sqlstr = "INSERT INTO $table (branch, section, amount, pin) 
        VALUES ('$branch', ' $section', '$amount', '$pin')";
       // return $conn->query($sqlstr);
        if($conn->query($sqlstr))
{
    echo "data inserted";
}
else
{
echo "failed".$conn->error;
} 
    }

    function insertUser2( $branch,$amount,$reference, $pin, $table, $conn)
    {
        $sqlstr = "INSERT INTO $table (branch, amount,reference, pin) 
        VALUES ('$branch', ' $amount', '$reference', '$pin')";
       // return $conn->query($sqlstr);
        if($conn->query($sqlstr))
    {
    echo "data inserted";
    }
    else
    {
       echo "failed".$conn->error;
    } 
    }


    function insertUser3( $branch,$account,$afigures, $pin, $table, $conn)
    {
        $sqlstr = "INSERT INTO $table (branch,account,afigures, pin) 
        VALUES ('$branch', ' $account', '$afigures', '$pin')";
       // return $conn->query($sqlstr);
        if($conn->query($sqlstr))
    {
    echo "data inserted";
    }
    else
    {
       echo "failed".$conn->error;
    } 
    }


    function insertUser4( $branch, $account,  $purpose, $experience,$profile,$history,$file,$pin, $table, $conn)
    {
        $sqlstr = "INSERT INTO $table (branch,account,purpose,experience,profile,history,file, pin) 
        VALUES ('$branch', '$account',  '$purpose', '$experience','$profile','$history','$file','$pin')";
       // return $conn->query($sqlstr);
        if($conn->query($sqlstr))
    {
    echo "data inserted";
    }
    else
    {
       echo "failed".$conn->error;
    } 
    }
     function inserUser5($username, $phone, $nid, $email, $dob, $city, $address, $bankusertype, $picture, $password, $cpassword,$sex, $newuser, $conn)
    {
        $sqlstr = "INSERT INTO $newuser (username, phone, nid, email, dob, city, address, bankusertype, picture, password, cpassword,sex) 
        VALUES ('$username', '$phone', '$nid', '$email', '$dob', '$city', '$address', '$bankusertype', '$picture', '$password', '$cpassword','$sex')";
       if($conn->query($sqlstr))
       {
       echo "data inserted";
       }
       else
       {
          echo "failed".$conn->error;
       } 
    }
    
    function inserUser6($file1,$file2,$file3,$file4,$pin, $newuser, $conn)
    {
        $sqlstr = "INSERT INTO $newuser (file1,file2,file3,file4,pin) 
        VALUES ('$file1','$file2','$file3','$file4','$pin')";
       if($conn->query($sqlstr))
       {
       echo "data inserted";
       }
       else
       {
          echo "failed".$conn->error;
       } 
    }





  /*  function searchUserbyUsername($username,$table,$conn)
    {
        $result = "SELECT* FROM $table WHERE username = '$username'";
        return $conn->query($result); 
    }
    function updateProfile( $username, $phone, $nid,$email,$dob,$city,  $address,$password,$cpassword ,$table,$conn) 
    {
        $result = "UPDATE $table SET uname=' $username',phone='$phone',nid='$nid',email='$email', dob=' $dob',city='$city', address =' $address',pass='$password',cpassword='$cpassword'";
    return $conn->query($result);
    }
    
*/
}

?>