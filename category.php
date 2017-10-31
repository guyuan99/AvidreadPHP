<?php

require_once 'php-includes/getvariables.inc.php';
require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
require_once 'php-includes/nav.inc.php';
require_once 'php/connect.php';

if (isset($_GET['category'])) {
    $category = $_GET['category'];
}else{
	exit("ERROR!");
}
?>
<section class="search_list">
<?php

$sql="SELECT * FROM books_info WHERE book_category='$category'";
$result = $db->query($sql);

while ($row = $result->fetch_object()) {
	$book_id = $row->book_id;
	$book_name = $row->book_name;
	$book_description=$row->book_description;
?>
	<div><a class="search_books_link" href="movie-single.php?book_id=<?php echo "$book_id";?>"><img src="images-movies/<?php echo "$book_name";?>.jpg"><span><p><?php echo $book_name; ?></p><br><?php echo $book_description; ?></span></a></div>
			<?php 
			}
			?>
</section>
<?php
require_once 'php-includes/footer.inc.php';
?>