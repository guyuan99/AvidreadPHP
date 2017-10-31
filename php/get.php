<?php

if(isset($_GET['user_id'])){
	$user_id=$_GET['user_id'];
	echo "the user_id you have chosen is $user_id";
}else{
	echo "user_id not set";
}


?>