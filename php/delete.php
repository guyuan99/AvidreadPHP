<?php

include 'connect.php';

if (isset($_GET['id'])){
	$user_id=$_GET['id'];
}

$stmt=$db->prepare("DELETE FROM test_db WHERE id=?");
$stmt->bind_param('i',$user_id);
$stmt->execute();
$stmt->close();

header("Location: display-and-insert.php");







?>