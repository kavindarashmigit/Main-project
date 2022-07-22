<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "medical_center";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:');
}

include_once 'student_rejister.php';

if(isset($_POST['submit']));
{	 
	 $enrolment_number	 = $_POST['enrolment_number'];
	 $name_with_initial= $_POST['name_with_initial'];
	 $name_in_full = $_POST['name_in_full'];
	 $phone_number = $_POST['phone_number'];
     $EmailID	 = $_POST['email_address'];
     $birth_day	 = $_POST['birth_day'];
     $home_town	 = $_POST['home_town'];
     $pname = $_FILES['file']['name'];


	 $title=$_POST["enrolment_number"];

	 $pname = rand(1000,10000)."-".$_FILES['file']['name'];

	 $tname=$_FILES['file']['tmp_name'];

	 $uploads_dir='./images';

	 move_uploaded_file($tname, $uploads_dir.'/'.$pname);
	 
 
	 $sql = "INSERT INTO student_rejister(enrolment_number,name_with_initial,name_in_full,phone_number,email_address,birth_day,home_town,medical_certificate)
	 VALUES ('$enrolment_number','$name_with_initial','$name_in_full','$phone_number','$EmailID',' $birth_day','$home_town','$pname' )";
	 if (mysqli_query($conn, $sql)) {
		echo "you have successfully registerd to the uwu medicle center ";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>





