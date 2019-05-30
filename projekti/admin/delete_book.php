<?php include("includes/header.php");?>
 
 <?php 
    if(isset($_GET['delete_book'])){
    $id = $_GET['delete_book'];
    $delete_book = "delete from books where id = '$id'";
