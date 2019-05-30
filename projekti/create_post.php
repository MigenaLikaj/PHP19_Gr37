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
