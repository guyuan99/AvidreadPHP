<?php

session_start();
require_once 'php/connect.php';
if(isset($_POST['submit'])){
	exit('ERROR!');
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['password'])) {
    $password = $db->real_escape_string($_POST['password']);
}

$sql = "SELECT count(*) AS c FROM login_info where username='$username' && password='$password'";

$result = $db->query($sql);

$num = $result->fetch_object();
$usernum = $num->c;


if($usernum>0){
	$_SESSION['username']=$username;
	header("Location: index.php");
}
else {
	header("Location: login.php?error_code=1");
	return;
}


?>

