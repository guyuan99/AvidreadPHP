<?php
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

?>
		<nav class="navigation">
			<div class="select_users">
				
				<?php if(isset($username)){echo "<h2><a href='index.php'>".$username."<img class='usericon' src='images-movies/usericon.png'></a></h2>";}else{echo "<h2><a href='login.php'>Log In<img class='usericon' src='images-movies/usericon.png'></a></h2>";} ?>
				
			</div>
			<?php

			if(isset($_SESSION['username'])){
				echo "<ul class='admin'>
				<li><a href='my-pape.php'?>My Page</a></li>
				<li><a href='logout.php'>Logout</a></li>
			</ul>";
			}

			?>
			<ul class='category_menu'>
				<li><a class="Agriculture" href='category.php?category=Agriculture'?>Agriculture</a></li>
				<li><a class="Architecture" href='category.php?category=Architecture'>Architecture</a></li>
				<li><a class="Art" href='category.php?category=Art'?>Art</a></li>
				<li><a class="Children" href='category.php?category=Children'>Children</a></li>
				<li><a class="Fiction" href='category.php?category=Fiction'?>Fiction</a></li>
				<li><a class="Health" href='category.php?category=Health'>Health, Mind, & Body</a></li>
				<li><a class="History" href='category.php?category=History'?>History</a></li>
				<li><a class="Music" href='category.php?category=Music'>Music</a></li>
				<li><a class="Religion" href='category.php?category=Religion'?>Religion</a></li>
				<li><a class="Travel" href='category.php?category=Travel'>Travel</a></li>
				<li><a class="Sports" href='category.php?category=Sports'?>Sports</a></li>
			
			</ul>
		</nav>