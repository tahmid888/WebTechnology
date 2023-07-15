


<?php
 
 include("../control/userloanprocess.php");
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/CSS" href="../css/userloan.css">
</head>
<body>
<center>
<h2>Welcome to the EBC Bank Limited</h2>
<h3><p>Get loan process</p></h3>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return formcheck()">
<div class ="center">
<center>


<table>
  <tr>
    <td>
    <label>Bank branch:</label>
                    <input type="text" name="branch" id="branch" placeholder="Enter branch" onkeyup=" checkbranch2()"><p id="brancherror"></p>
                    <?php echo $branchErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Account No:</label>
                    <input type="text" name="account" id ="account" placeholder="Enter your account No" onkeyup="checkaccount()"><p id="accounterror"></p>
    
                    <?php echo $accountErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Purpose of your loan:</label>
                    <input type="text" name="purpose" id ="purpose" placeholder="Enter your purpose" onkeyup="checkpurpose()"><p id="purposeerror"></p>
    
                    <?php echo $purposeErr; ?> 
    </td>
  </tr>

  <tr>
    <td>
    <label>Business experience:</label>
                    <input type="text" name="experience" id ="experience" placeholder="Enter your experience" onkeyup="checkexperience()"><p id="experienceerror"></p>
    
                    <?php echo $experienceErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Project profile:</label>
                    <input type="text" name="profile" id ="profile" placeholder="Enter your profile" onkeyup="checkprofile()"><p id="profileerror"></p>
    
                    <?php echo $profileErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Credit history:</label>
                    <input type="text" name="history" id ="history" placeholder="Enter your history" onkeyup="checkhistory()"><p id="historyerror"></p>
    
                    <?php echo $historyErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Business documents:</label>
                    <input type="file" name="file" id ="file" placeholder=".jpg/.png">
    
                    <?php echo $fileErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Input PIN:</label>
                    <input type="text" name="pin" id ="pin" placeholder="Enter your PIN code" onkeyup="checkpin()"><p id="pinerror"></p>
    
                    <?php echo $pinErr; ?> 
    </td>
  </tr>
<tr>
  <td>
  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                        <input type="submit"  name="submit" value="Submit">
                            <input type= "submit" name="back4" value="Back"> 
                            <br><br> 
  </td>
</tr>
  </center>
  </center>
</div>
  <script src="../js/myjs.js"></script> 
</body>
</html>