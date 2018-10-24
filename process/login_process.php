<?php
include('../config/connection.php');
if(isset($_POST['submit'])){
$email= $_POST['email'];
$password= $_POST['password'];
$query = "SELECT user_id FROM signup  WHERE email ='".$email."' AND password ='".$password."'";
$result = mysqli_query($connection, $query);
$rowcount = mysqli_num_rows($result);
$data = mysqli_fetch_array($result);
if($rowcount!=0){
	session_start();
	$_SESSION["user"] = $data['user_id'];
	header('location:profile.php');
}
	else{header('location:../login.html');
	}
}
else {header('location:../login.html');
}


?>