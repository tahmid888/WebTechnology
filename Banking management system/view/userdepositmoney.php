


<?php
 
 include("../control/userdepositmoneyprocess.php");
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/CSS" href="../css/userdepositmoney.css">
</head>
<body>
<center>
<h1>Welcome to the EBC Bank Limited</h1>
<h3><p>Deposition Money</p></h3>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return formcheck()">
<div class ="center">
<center>


<table>
  <tr>
    <td>
    <label>Bank branch: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="branch" id="branch" placeholder="Enter branch" onkeyup=" checkbranch()"><p id="brancherror"></p>
                    <?php echo $branchErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Account No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="account" id ="account" placeholder="Enter your account No" onkeyup="checkaccount()"><p id="accounterror"></p>
    
                    <?php echo $accountErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Amount in figures:</label>
                    <input type="text" name="afigures" id ="afigures" placeholder="Enter your amount in figures" onkeyup="checkafigures()"><p id="afigureserror"></p>
    
                    <?php echo $afiguresErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Input PIN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="pin" id ="pin" placeholder="Enter your PIN code" onkeyup="checkpin()"><p id="pinerror"></p>
    
                    <?php echo $pinErr; ?> 
    </td>
  </tr>
 <!-- <h4><p>NB: One deposit slip can be used to deposit up to INR 100,000</p></h4>-->
<tr>
  <td>
  <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            </label>

                        <input type="submit"  name="submit" value="Submit">
  </td>
</tr>
<tr>
  <td>
  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type= "submit" name="back4" value="Back"> 
                            <br><br> 
  </td>
</tr>
  </center>
  </center>
</dev>
  <script src="../js/myjs.js"></script>
</body>
</html>