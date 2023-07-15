
<!DOCTYPE html>
<html lang="en">
<?php
include("../control/userupdateProcess.php");
//include("../control/deleteProcess.php");
?>
<head>

    
</head>
<body>
    
<form action="" method="POST" enctype="multipart/form-data">
            <center>
                <table>
                    <h1>Update Account</h1>
                    <br>
                <tr>
                        <td>
                            <label>
                                Enter Username :
                            </label>
                        </td>
                        <td> <input type="text" name="uname" value=></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="search" value= "Search" class="button">
                        </td>
                    </tr>
                    <br>
                
                    
                    
                    <tr>
                        <td>
                        <label>Username: </label>
                        </td>
                        <td>
                        <input type="text" name="uname" value=" <?php echo $username; ?>" > 
                        </td>
                    </tr>

                    <tr>
                        <td><label>Phone: </label></td>
                        <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
                    </tr>



                    <tr>
                <td>
                    <label>NID :</label>
                    <input type="text" name="nid"  value="<?php echo $nid; ?>">
                    
                </td>
            </tr>

            <tr>
                        <td> <label>Email: </label></td>
                        <td><input type="text" name="email" value=" <?php echo $email; ?>"></td>
                    </tr>


                    

                    <tr>
                        <td><label>Date of Birth:</label></td>
                        <td><input type="text" name="dob" value=" <?php echo $dob; ?>" readonly></td>
                    </tr>


                    <tr>
                        <td><label>City:</label></td>
                        <td><input type="text" name="city" value=" <?php echo $city; ?> " readonly></td>
                    </tr>

                    <tr>
                        <td><label>Address:</label></td>
                        <td><input type="text" name="address" value="  <?php echo $address; ?> " readonly></td>
                    </tr>



                    <tr>
                        <td>
                        <label>Password: </label> 
                        </td>
                        <td>
                        <input type="text" name="pass" value="<?php echo $password; ?>">  
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                        <label>Confirm Password: </label> 
                        </td>
                        <td>
                        <input type="text" name="cpassword" value="<?php echo $cpassword; ?>">  
                        </td>
                    </tr>
                   
                   
                    
                    
                    <!-- <tr>
                    <td><label>Curriculum Vitae: </label></td>
                    <td><input type="file"name="cv" accept="pdf/*"></td> 

                    </tr>
                    <tr>
                        <td><label>Image: </label></td>
                        <td> <input type="file"  name="img" accept="image/*"></td>  
                    </tr> -->
                    
                    
                    <tr>
                    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </td>
                        <td>

                        <input type="submit" name="update" value="Update" class="button2">
                        </td>
                        
                       
                        
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="delete" value= "delete" class="button4">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                       
                    </tr>
                    
                    <tr>
                        <td> <a href="../view/userloginanother.php" class="button3">Back</td>
                    </tr>
                    <tr>
                    <br>
                        <td><br><br><br><br><br><br><br></td>
                    </tr>
                </table>
            </center>
        </form>
    </center>

</body>
</html>