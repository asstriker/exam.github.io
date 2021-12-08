<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$hobbies = $_POST['hobbies'];
$bio = $_POST['bio'];
$age = $_POST['age'];
$pic = $_POST['pic'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `name`, `lastname`, `email`, `password`,'gender','hobbies','bio','age','pic') VALUES ('0', '$name', '$lastname', '$email', '$password','$gender','$hobbies','$bio','$age','$pic')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>