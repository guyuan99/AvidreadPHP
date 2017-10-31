<?php
if(isset($_POST['content'])){
	$zaide=$_POST['content'];
}

?>

<form action="form.php" method="post">
	<input type="text" name="content">
	<button type="submit">Submit</button>
</form>

<br><br>

<p>the content you entered was <?php if(isset($_POST['content'])){echo $zaide;}?> </p>