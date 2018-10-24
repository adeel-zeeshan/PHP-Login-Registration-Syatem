<?php
include('../config/connection.php');
if(isset($_POST['submit'])){
$fname= $_POST['first_name'];
$lname= $_POST['last_name'];
$email= $_POST['email'];
$password= $_POST['password'];
$cpassword= $_POST['Cpassword'];

$query = "INSERT INTO signup (first_name,last_name,email,password)";
$query.= "VALUES ('".$fname."','".$lname."','".$email."','".$password."')";

mysqli_query($connection, $query);

header('location:../login.html');
}

else {
	header('location:../signup.html');
	}


?>