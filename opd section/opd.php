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
  

   if(($_POST['Password'] && $_POST['Opdcode']) != null){
      $Password = $_POST['Password'];
      $Opdcode = $_POST['Opdcode'];
   
      $sql = "SELECT id FROM opd WHERE Opdcode = '$Opdcode' and Password = '$Password'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   
      $count = mysqli_num_rows($result);
   
 
   
      if ($count == 1) {
         $_SESSION['login_user'] = $Opdcode;
         header("location: ../student rejister/student_rejister.html");
      } else {
         $error = "Your Login Opdcode or Pasword is invalid";
         header("Location: ./opd pasword.html");
      }
   }else{
      $error = "Your Login Opdcode or Pasword is invalid";
         header("Location: ./opd pasword.html");
   }

   
}
