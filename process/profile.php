<?php
include('display_process.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<script>
</script>
<style>
.display{
width:400px;
margin-left:40%;
border-radius:20%; 
border: #D9D9D9;
}
</style>
</head>
<body>
<div class="display">
<span>Name : <?php echo $data['first_name'];?>&nbsp;<?php echo $data['last_name'];?></span><br><br>
<span>Email : <?php echo $data['email'];?></span><br><br>
<span>Password : <?php echo $data['password'];?></span><br><br>
<a href="logout.php"><input type="button" name="logout" value="Log out"></a>
</div>



</body>
</html>
