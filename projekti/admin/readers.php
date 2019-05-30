<?php include("includes/header.php");?>
<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Readers</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Readers Id</th>
                            <th>Username</th>  
                            <th>Readers Email</th> 
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $user = "select * from users";
