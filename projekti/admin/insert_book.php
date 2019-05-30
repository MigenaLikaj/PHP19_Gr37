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
