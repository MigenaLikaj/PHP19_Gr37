<?php include("includes/header.php");?>
<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Books</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Book Id</th>
                            <th>Book Name</th>
                            <th>Book Description</th>
                            <th>Book Category</th>
                            <th>Book Price</th> 
                            <th>Delete Book</th>
                                                       
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $cat = "select * from books";
