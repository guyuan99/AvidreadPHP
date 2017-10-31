<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Avid Read--Motivate you to read</title>
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script src = "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<?php
		require_once 'php/connect.php';
		if (isset($_SESSION['username'])) {
    		$username = $_SESSION['username'];
    	}

    	$sql1="SELECT user_id FROM login_info WHERE username='$username'";
    	$result1 = $db->query($sql1);
    	while ($row = $result1->fetch_object()) {
			$user_id=$row->user_id;
		}
		?>
		<script>var $user_id  = "<?php echo $user_id; ?>"</script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
