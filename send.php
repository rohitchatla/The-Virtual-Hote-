<?php
if(isset($_POST['item'])||isset($_POST['submito'])||isset($_POST['type4'])||isset($_POST['type2'])){//submito//item
session_start();
include 'index2.php';
include 'includes/dbh.inc.php';
$msg=$_POST['msg'];
$name=$_SESSION['userUid'];
//$choice=$_POST['type'];
$item=$_POST['item'];//name:item
$type=$_POST['type2'];//name:type4


//$uid=$_SESSION['userId'];


$sql="insert into posts(msg,name,user_id,food,food_type) values('$msg', '$name', ".$_SESSION['userId'].",'$item','$type')";
$result=$conn->query($sql);
header("Location:home.php");
}
if(isset($_POST['submitot'])){
	session_start();
include 'index2.php';
include 'includes/dbh.inc.php';
	$msg=$_POST['msg'];
$name=$_SESSION['userUid'];
$choice4=$_POST['typed'];
$type=$_POST['type2'];
$sql="UPDATE posts SET food = '$choice4' , msg = '$msg', food_type = '$type' WHERE name = '$name'";
$result=$conn->query($sql);
header("Location:home.php");
/*$conn->query("UPDATE posts SET food='$choice4' WHERE name='$name'");*/

header("Location:home.php");
}
?>