<html>
    <body>
      <h1>Registration Form</h1>
    <form action ="../control/process.php" method="POST" onsubmit="return formcheck()">

<table>
  <tr> <td>First Name: </td> 
  <td><input type="Text" name="fn" id="fn" onkeyup="checkname()"><p id="unameerror"></p></td></tr>
  <tr> <td>Last Name: </td>  
  <td><input type="Text" name="ln" id="ln" onkeyup="checklastname()"><p id="unamelasterror"></p></td></tr>
  <td>Age: </td>  
  <td><input type="Text" name="age" id="age" onkeyup="checkage()"><p id="ageerror"></p></td></tr>
  <td>Designation: </td> 


  
  <td><input type="radio" name="des" id="des1" value = "Junior Programmer" onkeyup="checkradio1()">Junior Programmer<p id="radio1error"></p>
  <input type="radio" name="des" id ="des2" value = "Senior Programmer">Senior Programmer
  <input type="radio" name="des" id="des3"value = "Project Leader">Project Lead</td></tr>



  <tr> <td>Preferred Language: </td>

  
  <td><input type="checkbox" name="prel" value = "JAVA">JAVA
  <input type="checkbox" name="prel" value = "PHP">PHP
  <input type="checkbox" name="prel" value = "C++">C++</td> </tr>

  <tr> <td>E-mail: </td>
  <td><input type="email" name="em" id="em" onkeyup="checkemail()"><p id="emailerror"></p></td> </tr>
  <tr><td>Password: </td>
  <td><input type="password" name="pass" id="pass" onkeyup="checkpass()"><p id="passerror"></p></td> </tr>
  <tr><td>Please choose a file: </td>
  <td><input type="file" name="fl" id="fl" onkeyup="checkfile()"><p id="fileerror"></p></td> </tr>
  <td><input type="submit" name="sm" value="Submit">
  <input type="reset" name="rs"></td> </tr>
  <script src="../js/myscripts.js"></script>

    </body>
</html>