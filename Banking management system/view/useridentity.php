



<?php
 
 include("../control/useridentityprocess.php");
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/CSS" href="../css/useridentity.css">
</head>
<body>
<center>
<h1>Welcome to the EBC Bank Limited</h1>
<h3><p>Submit identity information</p></h3>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return formcheck()">
<div class ="center">
<center>


<table>
<tr>
                <td>
                    <label>Upload photo:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="file" name="file1" placeholder=".jpg/.png">
                    <?php echo $fileErr1; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Upload NID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="file" name="file2" placeholder=".jpg/.png">
                    <?php echo $fileErr2; ?>
                </td>
            </tr>


            <tr>
                <td>
                    <label>Prev.Credit commercial:</label>
                    <input type="file" name="file3" placeholder=".jpg/.png">
                    <?php echo $fileErr3; ?>
                </td>
            </tr>


  <tr>
    <td>
    <label>Others documents:</label>
                    <input type="file" name="file4" id ="file" placeholder=".jpg/.png">
    
                    <?php echo $fileErr4; ?> 
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
                            
                           
                           
                           
                            </label>

                        <input type="submit"  name="submit" value="Submit">
  </td>
</tr>
<tr>
  <td>
  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type= "submit" name="back5" value="Back"> 
                            <br><br> 
  </td>
</tr>
  </center>
  </center>
</div>
  <script src="../js/myjs.js"></script> 
</body>
</html>