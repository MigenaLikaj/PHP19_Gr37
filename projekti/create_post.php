<?php require 'header1.php'; ?>
<?php 
$msg = '';
if (isset($_GET['empty'])) {
	
	$msg = 'Field must not be empty!';
}
 ?>
<div class="card-header">
		<h3>Write Your Comment <i class="fas fa-pen-square"></i></h3>
	</div>

<div class="card-body">

	<?php if(!empty($msg)): ?>
		<div class="alert alert-danger"><?php echo $msg; ?></div>
	<?php endif; ?>
	<form action="create_post_actions.php" method="POST">
	

	<div class="from-group">
		<label for="email">Email</label>
		<input type="text" name="email" class="form-control" placeholder="Enter Email Here" >
	</div>

	<div class="form-group mt-2">
		<p>Content</p>
		<textarea name="content" cols="130" rows="10" placeholder="write your comment here..."></textarea>
	</div>

	<button name="publish" class="btn btn-primary ">Publish</button>

</form>


</div>
