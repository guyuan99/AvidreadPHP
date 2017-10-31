	<body>	
		<header>
			<h1><a href="index.php">Avid Read</a></h1>
			<form action="search_books.php">
				<input type="text" name="search_input">
				<button class="search_submit" type="submit">Search</button>
			</form>
			<?php
			if (isset($_GET['category'])) {
    			$category = $_GET['category'];
			}else{
				$category="111";
			}
			?>
			<p class="category_hidden"><?php echo $category; ?></p>
		</header>