<?php require 'header1.php'; ?>
	<?php

	 if (isset($_GET['id'])) {
	 	
	 	$id = $_GET['id'];
	 }
$post = new Post;
$fetch_singlePost = $post->readPostById($id);
 ?>
	<div class="card-body">
<h3 style=font-family:cursive;class="mb-4"><?php echo $fetch_singlePost->email; ?></h3>
