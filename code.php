<?php
 echo json_encode ($_POST);
$host = "localhost";
$user = "root";
$password = "";
$db = "ajax";
$conn = mysqli_connect($host,$user,$password,$db);
if(!$conn){
	echo "failed";
}
else{
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$height = $_POST['height'];
$date = $_POST['date'];
$number = $_POST['number'];

if( isset($name)){
	$query = "INSERT INTO info (name,email,gender,height,date_d,phone_number) VALUES('$name','$email','$gender','$height','$date','$number')";
	$results = mysqli_query($conn,$query);
}
else{
	echo "Empty";
}
}
?>