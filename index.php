<?php
session_start();
require_once 'php-includes/getvariables.inc.php';
require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
require_once 'php-includes/nav.inc.php';
if(isset($book_id)){
	require_once 'php-includes/favlist.inc.php';
	require_once 'php-includes/moviesingle.inc.php';
}else if(isset($page)){
	require_once 'php-includes/movieadmin.inc.php';
}else /*if(isset($_SESSION['username']))*/{
	require_once 'php-includes/home.inc.php';	
}

require_once 'php-includes/footer.inc.php';

?>

