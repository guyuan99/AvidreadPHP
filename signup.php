<?php
session_start();
require_once 'php/connect.php';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($_POST['confirmpassword'])) {
    $confirmpassword = $_POST['confirmpassword'];
}

if(empty($username)){
	header("Location: registration.php?error_code=1");
	return;
}
if(empty($password)){
	header("Location: registration.php?error_code=3");
	return;
}
if(empty($email)){
	header("Location: registration.php?error_code=2");
	return;
}
if(empty($confirmpassword)){
	header("Location: registration.php?error_code=4");
	return;
}

if($password!=$confirmpassword){
	header("Location: registration.php?error_code=5");
	return;
}
$sqlcheck="SELECT COUNT(*) AS c FROM login_info WHERE username='$username'";
$resultcheck = $db->query($sqlcheck);
while ($row = $resultcheck->fetch_object()) {
		$count = $row->c;
}
if($count>0){
	header("Location: registration.php?error_code=6");
	return;
}


$sql = "INSERT INTO login_info (username,password,email) VALUES ('$username','$password','$email')";

$result = $db->query($sql);

if(isset($_SESSION['username'])){
	unset($_SESSION['username']);
}

$_SESSION['username']=$username;
header("Location: index.php");

?>