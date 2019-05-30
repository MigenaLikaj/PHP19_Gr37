<?php 
include('includes/connection.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.8.3.min.js"></script>        
    </head>
  <body>
         <section class="login_area">
            <div class="container">
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <img src="logo3.png" alt="E-learning">
                        </div>
                        <div class="login_form"> 
                           <h2 style="text-align:center;margin:20px 0;">Admin's Login</h2>
                            <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="user" type="text" class="form-control" name="user" placeholder="User" required>                                        
                                </div>

                                <div class="input-group">
