<?php include("includes/header.php");?>
<?php 
    if(isset($_GET['del_user'])){
    $delete_user_id = $_GET['del_user'];
    $delete_user = "delete from admins where user_id = '$delete_user_id'";
