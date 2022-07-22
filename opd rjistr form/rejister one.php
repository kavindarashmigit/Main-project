

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "medical_center";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:');
}

include_once 'rejister one.php';

if(isset($_POST['submit']));
{	 
	 $FirstName = $_POST['firstName'];
	 $SeconedName= $_POST['secondName'];
	 $IDnumber = $_POST['id'];
	 $PhoneNumber	 = $_POST['phoneNo'];
     $EmailID	 = $_POST['email'];
     $Password	 = $_POST['password'];
     $Opdcode	 = $_POST['opdcocde'];


	 $sql = "INSERT INTO opd(FirstName,SeconedName,IDnumber,PhoneNumber,EmailID,Password,Opdcode)
	 VALUES ('$FirstName','$SeconedName','$IDnumber','$PhoneNumber','$EmailID','$Password','$Opdcode')";
	 if (mysqli_query($conn, $sql)) {
		echo "you have successfully registerd to the uwu medicle center ";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>





