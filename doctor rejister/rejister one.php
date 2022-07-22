<?php

 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'medical_center';
 $conn=mysqli_connect($servername,$username,$password,"$dbname");
 if(!$conn){
    die('Could not Connect My Sql:' .mysqli_error());
 }
 include_once 'rejister one.php';
if (isset($_POST['submit'])) {
    $FirstName = $_POST['first name'];
	$SeconedName = $_POST['Seconed Name'];
	$PhoneNo = $_POST['Phone No'];
	$IDnumber=$_POST['IDnumber'];
	$EmailID = $_POST['Email ID'];
	$Password = $_POST['Password'];
	$Doctorcode = $_POST[' Doctor code'];


	// Performing insert query execution
	// here our table name is college
	$sql = "INSERT INTO users (first_name,last_name,email,password,phone_number,doctor_code)
	VALUES('$FirstName','$SeconedName','$EmailID','$Password','$PhoneNo','$Doctorcode')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
} else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }
 mysqli_close($conn);

}

?>