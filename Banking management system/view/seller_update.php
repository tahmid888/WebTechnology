<?php
include("../control/update_control.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/CSS" href="../css/userupdate.css">
</head>
<body>
<center>
<h1>Welcome to the EBC Bank Limited</h1>
<h3><p>Update your Information</p></h3>
</center>
<form action="" method="post" enctype="multipart/form-data">
<div class ="center">
    <center>
<table>
       
      <!--  <tr><td>
        First Name:
        </td><td>
        <input type="text" name="fname">
        </td></tr>
        <tr><td>
        Last Name:
        </td><td>
        <input type="text" name="lname">
        </td></tr>  -->
       <!-- <tr>
            <td>
            <label>User name:</label>
        </td><td>
        <input type="text" name="uname">
        </td></tr>
        <tr><td>

        <tr><td>
        <label>Mobile no:</label>
        </td><td>
            <input type="text" name="mobno" id="">
        </td>

        </tr>
        
        <label>Email:</label>
        </td><td>
        <input type="email" name="email">
        </td></tr>
        <tr><td>
        Change password :
        </td><td>
        <input type="password" name="password">
        </td></tr>
        <tr><td>

-->
<tr>
    <td>
    <label>User name:</label>
                    <input type="text" name="uname"  placeholder="Enter name">
                    
    </td>
  </tr>
  <tr>
    <td>
    <label>Mobile no:&nbsp;</label>
   
                    <input type="text" name="mobno"  placeholder="Enter your mobile No" >
    
                    
    </td>
  </tr>
  <tr>
    <td>
    <label>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="email"  placeholder="Enter your mail" >
    
                   
    </td>
  </tr>
  <tr>
                <td>
                    <label>NID :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="nid"  placeholder="Enter your nid">
                    
                </td>
            </tr>
            <tr>
                <td>
                    <label>Date of birth :</label>
                    <input type="date" name="dob" placeholder="Enter your DOB">
                    
                </td>
            </tr>
            <tr>
                <td>
                    <label>City :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="city"  placeholder="Enter your city" >
                   
                </td>
            </tr>

            <tr>
                <td>
                    <label>Address :&nbsp;&nbsp;</label>
                    <input type="text" name="address"  placeholder="Enter your address">
                   
                   
                </td>
            </tr>

  <tr>
    <td>
    <label>Change password :</label>
                    <input type="text" name="password" placeholder="Enter your password" >

    
                    
    </td>
  </tr>
</center>
</center>
    </table>

    <table>
    <tr>
    <td>
    <label></label>
   </label>
    <input type="submit" class="button submit" name="submit" value="Update">
    </td>
  </tr>
  <tr>
    <td>
    <label></label>
    <input type= "submit" name="backs" value="Back"> 
    </td>
  </tr>
</table>
</div>
        <!-- <input type="reset" class="button reset" name="reset"> -->
</form>


    
</body>
</html>