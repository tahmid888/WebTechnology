


<?php
 
 include("../control/usertransfermoneyprocess.php");
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/CSS" href="../css/usertransfermoney.css">
</head>
<body>
<center>
<h1>Welcome to the EBC Bank Limited</h1>
<h3><p>Transfer Money System</p></h3>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return formcheck()">
<div class ="center">
<center>


<table>
  <tr>
    <td>
    <label>Desired Bank:</label>
                    <input type="text" name="dbank" id="dbank" placeholder="Enter desired bank" onkeyup=" checkdisired()"><p id="dbankerror"></p>
                    <?php echo $dbankErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="amount" id ="amount" placeholder="Enter your amount" onkeyup="checkamounts()"><p id="amounterror"></p>
    
                    <?php echo $amountErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Reference:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="reference" id ="reference" placeholder="Enter your references" onkeyup="checkreference()"><p id="referenceerror"></p>
    
                    <?php echo $referenceErr; ?> 
    </td>
  </tr>
  <tr>
    <td>
    <label>Input PIN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="pin" id ="pin" placeholder="Enter your PIN code" onkeyup="checkpins()"><p id="pinerror"></p>
    
                    <?php echo $pinErr; ?> 
    </td>
  </tr>
<tr>
  <td>
  <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           
                            
                            </label>

                        <input type="submit"  name="submit" value="Submit">
  </td>
</tr>
<tr>
  <td>
  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type= "submit" name="back3" value="Back"> 
                            <br><br> 
  </td>
</tr>
  </center>
  </center>
</div>
  <script src="../js/myjs.js"></script>
  
</body>
</html>