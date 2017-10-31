<?php

require_once 'php-includes/getvariables.inc.php';
require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
if (isset($_GET['error_code'])) {
    $error_code = $_GET['error_code'];
    if($error_code==1){
?>
    	<h2 class="search_error">Not a valid username or password</h2>
    	<?php
    }
}
?>
<section class="login_section">
<form action="login-varify.php" method="post">
	<div class="login_username">
	Username: <input type="text" name="username">
	</div>
	<br>
	<div class="login_password">
	Password: <input type="password" name="password">
	</div>
	<br>
	<button class="login_submit" type="submit">Login</button>
	<button class="login_signup" type="button" onclick="location.href='registration.php'">Sign up</button>
</section>

</form>



<?php
require_once 'php-includes/footer.inc.php';

?>