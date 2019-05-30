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
                         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
                        <p>
                            <label for="user_fname">User First Name</label>
                            <input type="text" placeholder="User First Name" name="user_fname" value="<?php echo $user_fname;?>">
                        </p> 
                        <p>
                            <label for="user_lname">User Last Name</label>
                            <input type="text" placeholder="User Last Name" name="user_lname" value="<?php echo $user_lname;?>">
                        </p>
                        <p>
                            <label for="user_name">User Name</label>
                            <input type="text" placeholder="User Name" name="user_name" value="<?php echo $user_name;?>">
                        </p>
                        <p>
                            <label for="user_email">User Email</label>
                            <input type="email" placeholder="User Email" name="user_email" value="<?php echo $user_email;?>">
                        </p>
                         <input type="hidden" name="hidden_id" value="<?php echo $user_id;?>">
                        <p>
                            <label for="user_is_admin">User Is Admin</label>
                            <input type="text" placeholder="User Is Admin?" name="user_is_admin" value="<?php echo $admin;?>">
                            <span>If you want to assign this user to admin then put '1' here.</span>
                        </p>   
                        <p> 
                            <input type="submit" value="Update" name="update_user">
                        </p>
                    </form>
                    <?php endwhile;?>
                    <?php };?>
