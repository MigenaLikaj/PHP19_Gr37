<?php include("includes/header.php");?>
<?php 
    if(isset($_GET['del_user'])){
    $delete_user_id = $_GET['del_user'];
    $delete_user = "delete from admins where user_id = '$delete_user_id'";
        
        $del_user = mysqli_query($con,$delete_user);  
      
    echo "<script>alert('Instructor Deleted Successfully!!')</script>";
    echo "<script>window.open('admins.php','_self');</script>"; 
        
    };
?>
 

<?php include("includes/footer.php");?>
