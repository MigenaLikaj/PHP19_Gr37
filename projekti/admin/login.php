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
                                           <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>                                                                                             <input id="hidden" type="hidden" class="form-control" name="hidden">

                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" value="Log In" class="btn btn-primary pull-right" name="login"/>                         
                                    </div>
                                </div>
                                <p style="color:#fff;font-size:16px;">New Here? Sign Up <strong><a href="signup.php">Here</a></strong> </p>
                            </form>
                            <p style="margin:20px 0;color:#222;text-align:center;font-size:18px;">Go back to the <strong><a href="index.php">Site</a></strong> </p>   
                        </div>
                    </div>
                </div>
            </div> 
        </section>
<?php 
if(isset($_POST['login'])){
$user = $_POST['user'];       
$pass = md5($_POST['password']);
