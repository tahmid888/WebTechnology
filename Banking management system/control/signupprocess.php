<?php

include("../db/mydb.php");

$usernameErr = "";
$phoneErr="";
$nidErr="";
$emailErr="";
$desErr="";
$dobErr="";
$cityErr ="";
$addressErr="";
$useridERR="";
$passwordErr="";
$password_cpasswordErr="";
$fileErr="";
$bankusertypeErr="";
$bankusertype ="";
$genderErr="";
$sex="";



if(isset($_POST['submit']))
{

    $username = $_POST["uname"];
    $phone = $_POST["phonenumber"];
    $nid = $_POST["nid"];
    $email = $_POST["email"];

    $dob = $_POST["dob"];
    $city   =$_POST["city"];
    $address  =$_POST["address"];
    $bankusertype =$_POST["account1"];
    $picture = $_FILES["file"]["name"];
    $password = $_POST["pass"];
    $cpassword = $_POST["cpassword"];
    $sex = $_POST["sex"];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);


    if(!empty($username) && !empty($phone) && !empty($nid) && !empty($email) && !empty($sex) && !empty($dob) && !empty($city) && !empty($address) && !empty($bankusertype) && !empty($picture) && !empty($password) && !empty($cpassword))
    {
        if (
            isset($_POST['account1']) ||
            isset($_POST['account2']) ||
            isset($_POST['account3']))
            {
                if (isset($_POST['account1']))
                {
                    $bankusertypeErr = 'Fixed deposite account';
                    $bankusertype = $bankusertype. $_POST['account1'];
                    echo '<br>';
                }
                if (isset($_POST['account2']))
                {
                    $bankusertypeErr = 'Saving account';
                    $bankusertype=  $bankusertype.''.$_POST['account2'];
                    echo '<br>';
                }
                if (isset($_POST['account3']))
                {
                    $bankusertypeErr = 'Recurring deposit account';
                    $bankusertype = $bankusertype.''. $_POST['account3'];
                    echo '<br>';
                }
            }
        else
        {
            $bankusertypeErr= 'You Have not Selected a checkbox';
            echo '<br>';
        }

    // if ( isset($_POST['des1']) ||
    //         isset($_POST['des2']) )
    //         {
    //             if (isset($_POST['des1']))
    //             {
    //                 $genderErr = "male";
    //                 $gender = $gender. $_POST['des1'];
    //                 echo '<br>';
    //             }
    //             if (isset($_POST['des2']))
    //             {
    //                 $genderErr = "female";
    //                 $gender=  $gender.''.$_POST['des2'];
    //                 echo '<br>';
    //             }
    //         }
       

        // if(isset($sex))
        // {
        //     if("male" ==$sex)
        //     {
        //         echo "Youhave seleced male";
        //     }
        //     else if("fmale" == $sex)
        //     {
        //         echo "You have slected female";
        //     }
        // }
    if(move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["file"]["name"]))
    {
        $filepath = "../uploads/" . $_FILES["file"]["name"];
        $fileErr = "File Uploaded";
    }
    else
    {
        echo "";
    }
        if (!preg_match ("/^[a-zA-z]*$/", $username))
        {
            $usernameErr = "Only alphabets and whitespace are allowed.";
        }
        if (empty($username))
        {
            $usernameErr = "Please enter username";
        }

        echo '<br>';

        if (!preg_match ("/^[0-9]*$/", $phone))
        {
            $phoneErr = "Only numeric value is allowed.";   
        }
        if(empty($phone)) {
            $phoneErr=" phone number required";
        }

        echo '<br>';

        if (!is_numeric($nid))
        {
            $nidErr = "Please enter only numbers.";
        }
        echo '<br>';

        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (!preg_match ($pattern, $email) )
        {
            $emailErr = "Email is not valid.";
        }
        echo '<br>';

        if (empty($dob))
        {
            $dobErr = "Please enter date of birth";
        }
        echo '<br>';

        if (!preg_match ("/^[a-zA-z]*$/", $city))
        {
            $cityErr = "Only alphabets are allowed.";
        }
        if (empty($city))
        {
            $cityErr = "Please enter city";
        }
        echo '<br>';

        $pattern_address = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (!preg_match ($pattern_address, $address) )
        {
            $addressErr = "Only alphabets are allowed.";
        }
        if (empty($address))
        {
            $addressErr = "Please enter address";
        }
        echo '<br>';

            if($password != "")
            {
                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
                {
                    $passwordErr = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
                }
            }
            if ($password == $cpassword)
            {
                $password_cpasswordErr= "Complete";
            }
            echo '<br>';
        
        
        
            
        }
        $mydb = new db();
        $myconn = $mydb->openCon();
        $mydb->inserUser5($username, $phone, $nid, $email, $dob, $city, $address, $bankusertype, $picture, $password, $cpassword,$sex,"usersignup", $myconn);
  
}


if(isset($_POST['back42']))
{
    //header("location: ../view/usersecoundlogin.php");
    header("location: ../view/userlogin.php");
}


?>