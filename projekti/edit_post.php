<?php require 'header.php'; ?>
<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$post = new Post;

	$edit_post = $post->readPostById($id);

}
	
 ?>

<div class="card-header">
	<h3>Edit Your Comment <i class="fas fa-edit"></i></h3>
</div>

<div class="card-body">

<form action="update_post.php" method="POST">

<div class="from-group">
		<input type="hidden" name="id" value="<?php echo $edit_post->id ?>">
	</div>
