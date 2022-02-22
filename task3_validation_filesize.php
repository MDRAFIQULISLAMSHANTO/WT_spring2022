<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="style.css">
    <title>Registration Form</title>
</head>
<body>
  <?php
  
  /**
   * for isseting
   */
  if ( isset($_POST['add']) ){
     //Get form value 
  $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $age = $_POST['age'];
  //$designation = $_POST['designation[]'];
 //$PreferredLanguage = $_POST['Preferred Language[]'];
 $email = $_POST['email'];
  $Password = $_POST['password'];
//  $myfile = $_POST['myfile'];
 echo "<pre>";
  print_r($_POST);
  
  echo"</pre>";

  }
  //Empty Value check
  if(empty($fname) || empty($lname) || empty($age) || empty($designation) ||empty($PreferredLanguage) ||empty($email) ||empty($Password) )
  {
    $mess= "<p style = \" color: red; \">All fields are required</p>";
  }
  else{
    $mess= "<p style = \" color: blue; \">All SET</p>";

    if(isset( $myfile['uploaded_file'])) {
      $errors     = array();
      $maxsize    = 2097152;
      $acceptable = array(
          'image/jpg',
      );
  
      if(($myfile['uploaded_file']['size'] >= $maxsize) || ($myfile["uploaded_file"]["size"] == 0)) {
          $errors[] = 'File too large. File must be less than 2 megabytes.';
      }
  
      if((!in_array($myfile['uploaded_file']['type'], $acceptable)) && (!empty($myfile["uploaded_file"]["type"]))) {
          $errors[] = 'Invalid file type. Only JPG type is accepted.';
      }
  
      if(count($errors) === 0) {
          move_uploaded_file($myfile['uploaded_file']['tmpname'], '/store/to/location.file');
      } else {
          foreach($errors as $error) {
              echo '<script>alert("'.$error.'");</script>';
          }
  
          die(); //Ensure no more processing is done
      }
  }
  
  }
  ?>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Registration Form</h1>
    
    <?php 
    //show validation message
    if (isset($mess)){
      echo $mess;
    }
    
    ?>
  <table>
   <tr>
    <td>First Name :</td>
    <td><input type="text" name="fname" ></td>
   </tr>
   <tr>
    <td>Last Name :</td>
    <td><input type="text" name="lname" ></td>
   </tr>
   <tr>
    <td>Age :</td>
    <td><input type="number" name="age" placeholder="Only Integer"></td>
   </tr>
   <tr>
    <td>Designation :</td>
    <td>
     <input type="radio" name="designation[]" value = "Junior Programmer"> Junior Programmer<br>
     <input type="radio" name="designation[]"value = "Senior Programmer"> Senior Programmer<br>
     <input type="radio" name="designation[]"value = "Project Lead"> Project Lead<br>
    </td>
   </tr>
   <tr>
    <td>Preferred Language </td>
    <td>
     <input type="checkbox" name="Preferred Language[]" value = "JAVA"> JAVA
     <input type="checkbox" name="Preferred Language[]" value = " PHP "> PHP
     <input type="checkbox" name="Preferred Language[]" value = "C++"> C++
     
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email"name="email"></td>
   </tr>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password"></td>
   </tr>
  
   <tr>
    <td style="text-align:right;box-sizing: border-box;"><input type="submit" name="add" value="Submit"></td>
    <td style="text-align:left;;box-sizing: border-box;"><input type="reset"name="reset"  value="Reset"></td>
   
    </tr>
    <tr>
   <td for="myfile">Please choose a file
   <input type="file" id="myfile" name="myfile"></td>
   </tr>
   
  </table>
 </form>
</body>
</html>