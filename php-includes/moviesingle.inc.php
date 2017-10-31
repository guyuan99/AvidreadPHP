<?php
require_once 'php/connect.php';
$status=0;

if(isset($_GET['book_id'])){
	$book_id=$_GET['book_id'];
}else{
	exit("ERROR!");
}

$sql = "SELECT * FROM books_info WHERE book_id='$book_id'";
if(isset($_SESSION['username'])){
	$username=$_SESSION['username'];
	$sql1="SELECT COUNT(*) AS c FROM favourite WHERE book_id='$book_id' && user_id=(  SELECT user_id FROM login_info WHERE username='$username' )";
	$result1 = $db->query($sql1);
	$count=0;
	while ($row = $result1->fetch_object()) {
		$count = $row->c;
	}
	if($count>0){
		$status=1;
	}
}


$result = $db->query($sql);

while ($row = $result->fetch_object()) {
	$book_description = $row->book_description;
	$book_name = htmlentities($row->book_name, ENT_QUOTES, "UTF-8");
}
?>



<section class="movie_single">
			<figure>
			<a href="#"><img class="pic_single" alt="pic_single" src="images-movies/<?php  echo $book_name; ?>.jpg"></a>
				<figcaption>
					<h3><?php echo $book_name; ?></h3>
					<a href="add-delete.php?action=<?php 
						if($status==0){
							echo '0';
						}else {
							echo "1";
						}
					 ?>&book_id=<?php 
					 	echo "$book_id";
					 ?>" class="add_delete">
					<?php 
						if($status==0){
							echo "Add to favourites";
						}else{
							echo "Delete from favourites";
						}
					 ?></p></a>
					<div class="single_description">
						<?php

						echo $book_description;

						?>
					</div>
				</figcaption>
			</figure>
		</section>