<?php
include('../config/connection.php');
session_start();
if(!isset($_SESSION['user']))
{
	header('location:../login.html');
}
$query = "SELECT * FROM signup WHERE user_id='".$_SESSION["user"]."'";
$result = mysqli_query($connection,$query);
$data= mysqli_fetch_array($result);
?>