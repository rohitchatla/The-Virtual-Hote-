<?php
include("includes/dbh.inc.php");


if(!isset($_GET["code"])){

	exit("Cant find page");
}
$code = $_GET["code"];
$getEmailQuery = mysqli_query($conn, "SELECT email FROM resetpasswords WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery) ==0){
	exit("Cant Find page");
}
if(isset($_POST["password"])){
	$pwd = $_POST["password"];
	$pwd = md5($pwd);
	$row = mysqli_fetch_array($getEmailQuery);
	$email = $row["email"];
	$query = mysqli_query($conn, "UPDATE users SET pwdUsers='$pwd' WHERE emailUsers='$email'");
	if($query) {
		$query= mysqli_query($conn, "DELETE FROM resetPasswords WHERE code='$code'");
		exit("Password updated");

	}else{
		exit("Something went wrong");
	}



}


?>
<style>
	 html{background: url(https://storage.needpix.com/rsynced_images/night-2978816_1280.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}
</style>
<form action="" method="post" autocomplete="off">
	<input type="password" name="password" placeholder="New password">
   <br>
   <input type="submit" name="submit" placeholder="Update password">
	
</form>