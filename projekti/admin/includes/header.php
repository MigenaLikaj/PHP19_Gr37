<?php 
include('includes/connection.php');
session_start();    
if(!isset($_SESSION['user_name'])){
    header("location: login.php");
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>E-Learning</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script> 
        <style>
            h1 {
          font-family: "Avenir Next", sans-serif;
    font-size: 40px;
    font-weight: 200;
    color: #7D7C7D;
    padding-top: 5px;
    
    text-shadow: 3px 2px pink;
}
        </style>       
    </head>
    <body>
    <header class="header_area">
    <div class="container">
        <div class="row top_header">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <ul class="social_top">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="loginreg">
                    <ul>
                       
                        <li>Hello <strong> <?php echo $_SESSION['user_name'];?> </strong></li> 
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row logo_area">
            <div class="col-md-6 col-sm-6- col-xs-12">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="loginreg">
                    <ul>
                       
                        <li><a href="index.php">LexoOnline</a></li>
                    </ul>
                </div>
            </div>
                    
                
            </div>
           
            </div>
        </div> 
    </div>
</header>
