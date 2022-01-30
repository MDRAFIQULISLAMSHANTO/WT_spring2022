<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
<form action="action_page.php">
  <div class="container">
    <h1>Registration Form</h1>
    
    <form>
  <table>
   <tr>
    <td>First Name :</td>
    <td><input type="text"></td>
   </tr>
   <tr>
    <td>Last Name :</td>
    <td><input type="text"></td>
   </tr>
   <tr>
    <td>Age :</td>
    <td><input type="number"></td>
   </tr>
   <tr>
    <td>Designation :</td>
    <td>
     <input type="radio" name="Designation"> Junior Programmer
     <input type="radio" name="Designation"> Senior Programmer
     <input type="radio" name="Designation"> Project Lead

    </td>
   </tr>
   <tr>
    <td>Preferred Language </td>
    <td>
     <input type="checkbox" name="Preferred Language"> JAVA
     <input type="checkbox" name="Preferred Language"> PHP
     <input type="checkbox" name="Preferred Language"> C++
     
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email"></td>
   </tr>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="Password"></td>
   </tr>
   
   <tr>
    <td><input type="submit" value="Submit"></td>
    <td><input type="Reset" value="Reset"></td>
   
    </tr>
    <tr>
   <td for="myfile">Please choose a file
   <input type="file" id="myfile" name="myfile"></td>
   </tr>
   

  </table>
 </form>
</body>
</html>