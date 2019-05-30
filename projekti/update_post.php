<?php require 'controller.php'; ?>
<?php 
if (isset($_POST['update'])) {
		$id = $_POST['id'];
	$email = $_POST['email'];
	$content = $_POST['content'];
$post = new Post;

$update_post = $post->updatePost($id,$email,$content);

header('location:single_post.php?id='.$id);

}



?>
