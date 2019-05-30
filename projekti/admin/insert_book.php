<?php include("includes/header.php");?>  
<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>Insert New Book</h2>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
                        <p>
                            <label for="name">Book Title</label>
                            <input type="text" placeholder="Book title" name="name" >
                        </p>
                        <p>
                            <label for="description">Book Content</label>
                            <textarea name="description" cols="30" rows="10" ></textarea>
                        </p> 
                         <p>
                            <label for="category">Book Category</label>
                            <select name="category" id="select_cat">
                            <option value="Select a category">Select a category</option>
                                <option value="roman">Roman</option>
                             <option value="poezi">Poezi</option>
                             <option value="tregime">Tregime dhe Novela</option>
                             <option value="proze">Proze</option>
                              </select>
                        </p> 
                         <p>
                            <label for="price">Book Price</label>
                            <input type="text" placeholder="Price " name="price">
                        </p>
                        <p> 
                            <input type="submit" value="Publish" name="publish_book">
                            </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
/* Insert Query*/
if(isset($_POST['publish_book'])){
$name = $_POST['name'];
$description = mysqli_real_escape_string ($con,$_POST['description']);

$category = $_POST['category'];
$price = $_POST['price'];

  
    if($name == '' OR $description == '' OR $category == '' OR $price == ''){
    echo "<script>alert('Please Fill All The Fields')</script>";
        exit();
    }
    else{
        $insert_post = "insert into books (name,description,category,price) values ('$name','$description','$category','$price')";
    $run_query = mysqli_query($con,$insert_post);
        if($run_query){
            echo "<script>alert('Book Published Successfully!!')</script>";
            echo "<script>window.open('books.php','_self');</script>"; 
        }
    }
}
?> 
<?php include("includes/footer.php");?>
