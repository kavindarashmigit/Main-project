<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "medical_center";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
   die('Could not Connect My Sql:');
}


if ($_POST['submit']) {
  

   if(($_POST['password'] && $_POST['doctorcord']) != null){
      $Password = $_POST['password'];
      $Doctorcode = $_POST['doctorcord'];
   
      $sql = "SELECT id FROM user WHERE doctorcode = '$Doctorcode' and password = '$Password'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   
      $count = mysqli_num_rows($result);
   
     
   
      if ($count == 1) {
         $_SESSION['login_user'] = $Doctorcode;
   
         header("location: ../enter enrolment number/enter.php");
      } else {
         $error = "Your LoginDoctorcode or Password is invalid";
         header("Location: ./doctor pasword.html");
      }
   }else{
      $error = "Your LoginDoctorcode or Password is invalid";
         header("Location: ./doctor pasword.html");
   }

   
}
