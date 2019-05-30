<?php require 'controller.php'; ?>
<?php 

if (isset($_POST['publish'])) {

	$email = $_POST['email'];
	$content = $_POST['content'];

	if (!empty($email) && !empty($content)) {
	$create_post = new Post;

	$last_id =  $create_post->insertPost($email,$content);

	header('location:single_post.php?id='.$last_id);

	}
	else{

		header('location:create_post.php?empty');
	}
}
