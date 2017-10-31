<?php


$fruit1="grape";

function showFruit(){
	GLOBAL $fruit1;
	$fruit="apples";
	echo $fruit1;
	echo $fruit;
}

showFruit();



?>