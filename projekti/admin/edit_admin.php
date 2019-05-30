<?php include("includes/header.php");?>  
<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>Edit Admin</h2>
                    <?php 
                    if(isset($_GET['edit_user'])){
                    $user_get_id = $_GET['edit_user'];
                    $user = "select * from admins where user_id = '$user_get_id'";
                    $run_user = mysqli_query($con,$user); 
                    while($user_row = mysqli_fetch_array($run_user)):  
                    $user_id = $user_row ['user_id'];   
                    $user_fname = $user_row ['user_fname'];   
                    $user_lname = $user_row ['user_lname'];   
                    $user_name = $user_row ['user_name'];   
                    $user_email = $user_row ['user_email'];   
                    $admin = $user_row ['admin'];   
                    ?>
