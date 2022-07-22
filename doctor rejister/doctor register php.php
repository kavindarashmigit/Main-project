<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "medical_center";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:');
}

include_once 'doctor register php.php';

if(isset($_POST['submit']));
{	 
	 $FirstName = $_POST['firstName'];
	 $SecondName= $_POST['secondName'];
	 $IDnumber = $_POST['id'];
	 $PhoneNumber	 = $_POST['phoneNo'];
     $EmailID	 = $_POST['email'];
     $Password	 = $_POST['password'];
     $Doctorcode	 = $_POST['d-code'];


	 $sql = "INSERT INTO user (FirstName,SecondName,IDnumber,PhoneNumber,EmailID,Password,Doctorcode)
	 VALUES ('$FirstName','$SecondName','$IDnumber','$PhoneNumber','$EmailID','$Password','$Doctorcode')";
	 if (mysqli_query($conn, $sql)) {
		echo "you have successfully registerd to the uwu medicle center !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
