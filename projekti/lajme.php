<!DOCTYPE html>
<html manifest="demo_html.appcache">
<head lang="en">
<link rel="stylesheet" type="text/css" href="index.css">
<meta charset="utf-8">
<title>Lajme</title>
<style>
.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float:left;
    width: 350px;
}
.gallery:hover {
    border: 50px #767;
}
.gallery img {
    width: 100%;
    height: auto;
}
.desc {
    padding: 15px;
    text-align: center;
}
#pagenav
{
	height:80px;
    text-align: center;
	vertical-align: baseline;
	font-size:20px;
    float:bottom;

}
#pagenav ul{
     background:#DCDCDC;
     overflow:hidden;
     padding-left:200px;
   }
#pagenav ul li{
	border-right: 1px solid #bbb;
    float: left;
    width: %;
   }
#pagenav ul li a {
    display: block;
    color: black;
    text-align: center;
    padding: 30px;
    text-decoration: none;
    font-weight: bold;
   }
</style>
</head>

<body>
<?php include ('header.php'); ?>
<div style="margin-bottom:10px;">
<div style="margin-left:100px ; margin-right:100px;">
<div class="gallery">
  <a target="_blank" href="lajmi1.php"> 
      <img src="images/lajmi1.png" 
    alt=" 10 libra motivues – Të paktën një prej tyre duhet të jetë në listën tuaj" 
     width="600" height="400" > 
                  <div class="desc">10 libra motivues – Të paktën një prej tyre duhet të jetë në listën tuaj</div>
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="lajmi2.php"> 
      <img src="images/lajmi2.jpg" 
    alt=" Një libër, një laps, një fëmijë dhe një mësues mund ta ndryshojnë botën" 
     width="600" height="400">  
    
      <div class="desc"> “Një libër, një laps, një fëmijë dhe një mësues mund ta ndryshojnë botën”</div>
  </a>
</div>

<div class="gallery" >
  <a target="_blank" href="lajmi3.php"> 
      <img src="images/lajmi3.jpg" 
    alt=" Librat qe zhvillojne inteligjencen dhe forcojne memorien" 
     width="600" height="400" >     
<div class="desc">Librat qe zhvillojne inteligjencen dhe forcojne memorien</div>
  </a>
</div>
	
	
