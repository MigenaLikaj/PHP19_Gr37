<?php include("includes/header.php");?>


<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Admin</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Admin Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Admin Email</th>  
                            <th> Username</th>
                            <th>About </th>
                            
                            <th>Delete</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $user = "select * from admins";
