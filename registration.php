<?php
require_once 'php-includes/getvariables.inc.php';
require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
require_once 'php-includes/nav.inc.php';
?>
<?php
if (isset($_GET['error_code'])) {
    $error_code = $_GET['error_code'];
    if($error_code==1){
    	?>
    	<h2 class="search_error">Please enter a username</h2>
    	<?php
    }else if($error_code==2){
    	?>
    	<h2 class="search_error">please enter a email</h2>
    	<?php
    }else if($error_code==3){
    	?>
    	<h2 class="search_error">please enter a password</h2>
    	<?php
    }else if($error_code==4){
    	?>
    	<h2 class="search_error">please confirm password</h2>
    	<?php
    }else if($error_code==5){
    	?>
    	<h2 class="search_error">Two password must be same</h2>
    	<?php
    }else if($error_code==6){
    	?>
    	<h2 class="search_error">Username already exists, try another one</h2>
    	<?php
    }
}
?>
<section class="signup_section">

<form action="signup.php" method="post" onSubmit="return validateForm();" name="registration_form">
	<div class="signup_username">
	<input type="text" name="username" placeholder="Username">
	</div>
	<br>
	<div class="signup_email">
	<input type="text" name="email" placeholder="Email">
	</div>
	<br>
	<div class="signup_password">
	<input type="password" name="password" placeholder="Password">
	</div>
	<br>
	<div class="signup_confirmpassword">
	<input type="password" name="confirmpassword" placeholder="Confirm Password">
	</div>
	<br>
	<button class="signup_submit" type="submit">Submit</button>
</section>

</form>


<?php
require_once 'php-includes/footer.inc.php';
?>