<?php require 'controller.php'; ?>
<?php 

if (isset($_POST['publish'])) {

	$email = $_POST['email'];
	$content = $_POST['content'];

	if (!empty($email) && !empty($content)) {
