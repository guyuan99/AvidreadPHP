<?php
require_once 'php/connect.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM books_info WHERE book_id IN (
	SELECT book_id FROM favourite WHERE user_id=(
		SELECT user_id FROM login_info WHERE username='$username'
	) 
)";
	$sql1="SELECT user_id FROM login_info WHERE username='$username'";

$result = $db->query($sql);
$result1 = $db->query($sql1);
while ($row = $result1->fetch_object()) {
	$user_id=$row->user_id;
}
}

?>
		<nav class="favs_list">
			<h2>Favourites</h2>
			<ul class="favs"> 
			<?php
			if (isset($_SESSION['username'])) {
			while ($row = $result->fetch_object()) {
		        $book_name = htmlentities($row->book_name, ENT_QUOTES, "UTF-8");
		        $book_id=$row->book_id;
		    ?>
				<li id="<?php echo "$book_id";?>"><a href="movie-single.php?book_id=<?php echo $book_id; ?>"><?php echo $book_name; ?></a></li>
			<?php
			}
		}
			?>

			</ul>
			<div class="trash"></div>
		</nav>
