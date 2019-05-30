<?php require 'header1.php'; ?>
<div class="card-body">
<?php 
$post = new Post;

$fetch_post = $post->readAllPost();

foreach ($fetch_post as $value):
	
 ?>
