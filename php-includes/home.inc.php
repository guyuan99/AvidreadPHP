<?php

require_once 'php/connect.php';
$sql="SELECT * from books_info ORDER BY book_id DESC LIMIT 12";
$result = $db->query($sql);

?>
<section class="home_list">
			<?php
			while ($row = $result->fetch_object()) {
				$book_id = $row->book_id;
				$book_name = htmlentities($row->book_name, ENT_QUOTES, "UTF-8");
				$book_description = $row->book_description;
			?>

			<div><a class="home" href="movie-single.php?book_id=<?php echo "$book_id";?>"><img src="images-movies/<?php echo "$book_name";?>.jpg "><span><p><?php echo $book_name; ?></p><br><?php echo $book_description; ?></span></a></div>
			<?php 
			}
			?>
		</section>