<?php
session_start();
require_once 'php/connect.php';
if(isset($_SESSION['username'])){
	$username=$_SESSION['username'];
}else{
	header("Location: login.php");
	return;
}

if(isset($_GET['action'])){
	$action=$_GET['action'];
}else{
	exit("ERROR! action");
}

if(isset($_GET['book_id'])){
	$book_id=$_GET['book_id'];
}else{
	exit("ERROR! book_id");
}

if($action==0){
	$sql="SELECT user_id FROM login_info WHERE username='$username'";
	$result = $db->query($sql);
	while ($row = $result->fetch_object()) {
		$user_id = $row->user_id;
	}
	$sql="INSERT INTO favourite VALUES ('$user_id','$book_id')";
	$result = $db->query($sql);
	header("Location: movie-single.php?book_id=$book_id");
}else{
	$sql="SELECT user_id FROM login_info WHERE username='$username'";
	$result = $db->query($sql);
	while ($row = $result->fetch_object()) {
		$user_id = $row->user_id;
	}
	$sql="DELETE FROM favourite WHERE user_id='$user_id' && book_id='$book_id'";
	$result = $db->query($sql);
	header("Location: movie-single.php?book_id=$book_id");
}


?>