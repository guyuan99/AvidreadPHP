<?php

require_once '../php/connect.php';

$userID=$_POST['user_id'];
$bookID=$_POST['book_id'];

echo "$userID"."bookID";

$sql="DELETE FROM favourite WHERE  user_id='$userID' && book_id='$bookID'";
$result = $db->query($sql);


?>
