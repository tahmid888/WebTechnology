


<?php
 
 include("../control/userwidthrawprocess.php");
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/CSS" href="../css/userwidthraw.css">
</head>
<body>
<center>
<h1>Welcome to the EBC Bank Limited</h1>
<h3><p>Money Withdrawal</p></h3>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return formcheck()">
<div class ="center">
<center>


<table>
  <tr>
    <td>
    <label>Bank branch:</label>
                    <input type="text" name="branch" id="branch" placeholder="Enter branch name" onkeyup=" checkbranch()"><p id="brancherror"></p>
                    <?php echo $branchErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Bank section:</label>
                    <input type="text" name="section" id ="section" placeholder="Enter section" onkeyup="checksection()"><p id="sectionerror"></p>
    
                    <?php echo $sectionErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Input amount:</label>
                    <input type="text" name="amount" id ="amount" placeholder="Enter amount" onkeyup="checkamount()"><p id="amounterror"></p>
    
                    <?php echo $amountErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Input PIN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="pin" id ="pin" placeholder="Enter your PIN code" onkeyup="checkpin()"><p id="pinerror"></p>
    
                    <?php echo $pinErr; ?> 
    </td>
  </tr>
<tr>
  <td>
  <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           
                            </label>

                        <input type="submit"  name="submit" value="Submit">
  </td>
</tr>
<tr>
  <td>
  <label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </label>
                            <input type= "submit" name="back222" value="Back"> 
                            <br><br> 
  </td>
</tr>
</div>
  </center>
  </center>

  <script src="../js/myjs.js"></script>
</body>
</html>