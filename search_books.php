<?php 
session_start();
require_once 'php-includes/getvariables.inc.php';
require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
require_once 'php-includes/nav.inc.php';
require_once 'php/connect.php';
if (isset($_GET['search_input'])) {
    $search_input = $_GET['search_input'];
}else{
	$search_input="";
}

$sql="SELECT COUNT(*) AS c FROM books_info WHERE book_name LIKE '%$search_input%'";
$result = $db->query($sql);

while ($row = $result->fetch_object()) {
	$count = $row->c;
}
if($count==0){
?>
<section class="search_list">
<h2 class="search_error">There is no book which contains '<?php echo "$search_input";?>' </h2>
<br><br><hr><br>
<h2>Here are the new books: </h2>
<br><br>
<?php
$sql="SELECT * from books_info ORDER BY book_id DESC LIMIT 12";
$result = $db->query($sql);

	while ($row = $result->fetch_object()) {
		$book_id = $row->book_id;
		$book_name = htmlentities($row->book_name, ENT_QUOTES, "UTF-8");
		$book_description=$row->book_description;
?>
			<div><a class="search_books_link" href="movie-single.php?book_id=<?php echo "$book_id";?>"><img src="images-movies/<?php echo "$book_name";?>.jpg"><span><p><?php echo $book_name; ?></p><br><?php echo $book_description; ?></span></a></div>
			<?php 
			}
			?>
</section>
<?php
}else{
?>
<section class="search_list">
<h2>Here are the books which contain '<?php echo "$search_input";?>'</h2>
<br><br>
<?php
$sql="SELECT * FROM books_info WHERE book_name LIKE '%$search_input%'";
$result = $db->query($sql);
while ($row = $result->fetch_object()) {
		$book_id = $row->book_id;
		$book_name = htmlentities($row->book_name, ENT_QUOTES, "UTF-8");
		$book_description=$row->book_description;
?>
<div><a class="search_books_link" href="movie-single.php?book_id=<?php echo "$book_id";?>"><img src="images-movies/<?php echo "$book_name";?>.jpg"><span><p><?php echo $book_name; ?></p><br><?php echo $book_description; ?></span></a></div>
<?php
}
?>
</section>
<?php
}
require_once 'php-includes/footer.inc.php';

?>