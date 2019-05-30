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
                                <a href="books.php">
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
                                            $num_rows_learner = mysqli_num_rows($run_learner);   
                                            ?>
                                            <div class="huge"><?php echo $num_rows_learner;?></div>
                                            <div>All Readers</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="readers.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-6">
                            <div class="panel panel-orange">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-group fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php
                                            $admins = "SELECT * FROM `admins`";
                                            $run_admins = mysqli_query($con,$admins);  
                                            $num_rows_admins = mysqli_num_rows($run_admins);   
                                            ?>
                                            <div class="huge"><?php echo $num_rows_admins;?></div>
                                            <div>Admins</div>
                                        </div>
                                    </div>
                                </div>
                                        <a href="admins.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                           <hr >                  
                   <div class="row">
                       <div class="col-md-6 col-sm-12">
                           <div class="latest_admin_post admin_latest">
                               <h3>Latest Books</h3>
                                <?php 
                                $post = "select * from books LIMIT 5";
                                $run_post = mysqli_query($con,$post); 
                                while($post_row = mysqli_fetch_array($run_post)):
                                $id = $post_row ['id'];   
                                $name = $post_row ['name']; 
                                $category = $post_row ['category']; 
                                $price = $post_row ['price'];  
                                $description = substr($post_row ['description'],0,300); 
                                ?>
                                <h4 style="margin-top:20px;margin-bottom:5px"><?php echo $name;?></h4>
                                <p ><?php echo $description;?></p>
                                <?php endwhile;?>
                           </div>
                       </div>
                       
