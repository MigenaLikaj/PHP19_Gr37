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
                            
                            $run_cat = mysqli_query($con,$cat); 
                        while($cat_row = mysqli_fetch_array($run_cat)):
                        $id = $cat_row ['id'];   
                        $name = $cat_row ['name']; 
                        $category = $cat_row ['category']; 
                        $price = $cat_row ['price'];   
  
                        $description = substr($cat_row ['description'],0,300);
 
                        ?>             
                          <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $description;?></td>
                            <td><?php echo $category;?></td>
                            <td><?php echo $price;?></td>


                            <td><a href="delete_book.php?delete_book=<?php echo $id;?>">Delete</a></td>
                          </tr>
                        <?php endwhile;?>   
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
 

<?php include("includes/footer.php");?>
