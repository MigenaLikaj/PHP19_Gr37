<?php include("includes/header.php");?> 
<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>Admin Dashboard</h2>
                    <div class="row">
                        <div class="col-md-4 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tachometer fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php
                                            $post = "SELECT * FROM `books`";
                                            $run_post = mysqli_query($con,$post);  
                                            $num_rows = mysqli_num_rows($run_post);   
                                            ?>
