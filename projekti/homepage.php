<!DOCTYPE html> 
<html manifest="demo_html.appcache">
<head lang="en">
    <link href="https://fonts.googleapis.com/css?family=Saira%7CSaira+Condensed%7CSaira+Extra+Condensed%7CSaira+Semi+Condensed%7CLato%7CRoboto" rel="stylesheet">
<meta charset="utf-8">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    html {
    background: #ffffff;
}
.header-container {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #F2F2F2;
    padding: 2.3em 0;
}
body {
    font-family: Saira, sans-serif;
    font-size: 1em;
    color: #000000;
    max-width: 1200px;
    margin: auto;
}

.img{

     display: block;
     margin-left: 550px;
     
}
.container{
  text-align: center;
  margin-top: 30px;

}
.btn{
  border: 1px solid #3498db;
  background: none;
  padding: 30px 100px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
  transition:0.8s;
  position: relative;
  overflow: hidden;
}
.btn1, .btn2{
  color: #3498db;
}
.btn3, .btn4{
  color: #fff;
}
.btn1:hover,.btn2:hover{
  color:#fff;
}
.btn3:hover,.btn4:hover{
  color: #3498db;
}
    
    .btn::before{
  content:"";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before, .btn3::before{
  top:0;
  border-radius: 0 0 50% 50%;
}
.btn2::before,.btn4::before{
  bottom:0;
  border-radius: 50% 50% 0 0;
}
.btn3::before,.btn4::before{
  height: 180%;
}
.btn1:hover::before,.btn2:hover::before{
  height: 180%;
}
.btn3:hover::before,.btn4:hover::before{
  height: 0%;
}
</style>

<title>Lexo Online</title>
</head>
<body> 
<?php include ('header2.php'); ?>


  <div class="container">
    <h3>ADMIN</h3>
    <a href="admin/login.php ">
      <button class="btn btn1">Login</button>
  </a>
  <a href="admin/signup.php  ">
      <button class="btn btn2">Sign up</button><br>
  </a><br>
      <h3>READER</h3>
      <a href="login.php">
      <button class="btn btn3">Login</button>
  </a>
  <a href="register.php">
      <button class="btn btn4">Sign up</button>
  </a>
  </div>

      <br><br>
</body>
</html>

