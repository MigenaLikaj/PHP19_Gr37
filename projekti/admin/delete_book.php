<?php include("includes/header.php");?>
 
 <?php 
    if(isset($_GET['delete_book'])){
    $id = $_GET['delete_book'];
    $delete_book = "delete from books where id = '$id'";
     $del_book = mysqli_query($con,$delete_book);  
      
    echo "<script>alert('Book Deleted Successfully!!')</script>";
    echo "<script>window.open('books.php','_self');</script>"; 
        
    };
?>
 

<?php include("includes/footer.php");?>
