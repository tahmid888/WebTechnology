
<?php

    @include("../control/signupprocess.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/CSS" href="../css/usersignup.css">
</head>

<body>

    <h1>Welcome to the EBC Bank Limited</h1>
    <div class="center1">
    <h1>Please Signup to this from</h1>
</div>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>

            <tr>
                <td>
                    <label>Username :</label>
                    <input type="text" name="uname" id="uname" placeholder="Enter your Username" onkeyup="checkname()"><p id="unameerror"></p>
                    <?php echo $usernameErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Phone number :</label>
                    <input type="text" name="phonenumber" id ="phonenumber" placeholder="Enter your phone number" onkeyup="checkphone()"><p id="phoneerror"></p>
                    <?php echo $phoneErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>NID :</label>
                    <input type="text" name="nid" id="nid" placeholder="Enter your nid" onkeyup="checknid()"><p id="niderror"></p>
                    <?php echo $nidErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" onkeyup="checkemail()">
                    <p id="emailerror"></p>
                    <?php echo $emailErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Sex :</label>
                    <input type="radio"  name="sex" id="male" value="male" onclick="checkButton()">Male
                    <input type="radio" name="sex" id="female" value="female" onclick="checkButton()">Female<br>
                    <?php echo $genderErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Date of birth :</label>
                    <input type="date" name="dob" placeholder="Enter your DOB">
                    <?php echo $dobErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>City :</label>
                    <input type="text" name="city" id ="city" placeholder="Enter your city" onkeyup="checkcity()"><p id="cityerror"></p>
                    <?php echo $cityErr; ?> 
                </td>
            </tr>

            <tr>
                <td>
                    <label>Address :</label>
                    <input type="text" name="address" id="address" placeholder="Enter your address" onkeyup="checkaddress()">
                    <p id="addresserror"></p>
                    <?php echo $addressErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Bank account type :</label>
                    <input type="checkbox" name="account1" id="fixed deposit account" value="Fixed deposit account" onclick="checkboxButton1()">Fixed deposit account
                    <input type="checkbox" name="account2" id="saving account"  value="Saving account" onclick="checkboxButton1()">Saving account
                    <input type="checkbox" name="account3" id="recurring deposit account" value="Recurring deposit account" onclick="checkboxButton1()">Recurring deposit account
                    <?php echo $bankusertypeErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Upload your photo:</label>
                    <input type="file" name="file" placeholder=".jpg/.png">
                    <?php echo $fileErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Password:</label>
                    <input type="password" name="pass" placeholder="Enter your password">
                    <?php echo $passwordErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Confirm password:</label>
                    <input type="password" name="cpassword" placeholder="Confirm your password">
                    <?php echo $password_cpasswordErr; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox" name="account1" id="acc1"  onclick="checkboxButton2()">I want to receive news<br>
                    <input type="checkbox" name="account2" id="acc2"  onclick="checkboxButton2()">I want to receive information about<br>promotions and special offers
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit"  name="submit" value="Submit">
                </td>
            </tr>

            <tr>
                <td>
                    <input type= "submit" name="back42" value="Back"> 
                </td>
            </tr>

        </table>
    </from>
<script src="../js/myjs.js"></script> 
<h3 id="disp" > </h3>
<h4 id="error"> </h4>
</body>
</html>