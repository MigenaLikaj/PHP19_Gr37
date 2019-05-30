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
                       <div class="huge"><?php echo $num_rows;?></div> 
                                            <div>All Books</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="view_categories.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-mortar-board  fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php
                                            $learner = "SELECT * FROM `users`";
                                            $run_learner = mysqli_query($con,$learner);
