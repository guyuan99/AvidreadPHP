<?php

require_once 'php/connect.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

$sql = "SELECT book_id,book_name,book_description FROM books_info INNER JOIN (
	SELECT book_id AS book_id1 FROM favourite GROUP BY book_id ORDER BY COUNT(user_id) DESC LIMIT 3
) AS table1 ON books_info.book_id=table1.book_id1";

$result = $db->query($sql);

?>

<section class="movie_list">
			<h2 class="welcome">Hi, <?php echo $username;  ?></h2>
			<br>
			<p style="font-size:1.3em">Here are some movies you might like.</p>
			<br>
			<p style="color:grey">Click on the hert icon to add them to your favourite list.</p>
			<ul>
				<?php
					while ($row = $result->fetch_object()) {
		        	$book_name = htmlentities($row->book_name, ENT_QUOTES, "UTF-8");
		        	$book_description = $row->book_description;
		        	$book_id = $row->book_id;
		    	?>
				<li>
					<figure><a href="#"><img class="thumbnail" alt="Thumbnail" src="images-movies/<?php echo $book_name;?>.jpg"></a>
					<figcaption>
						<h3><a href="movie-single.php?book_id=<?php echo $book_id?>"><?php echo $book_name; ?></a></h3>
						<div class="description"><?php echo $book_description; ?></div>
					</figcaption>
					</figure>
				<?php
					}
				?>
				
			</ul>
		</section>