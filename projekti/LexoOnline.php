<!DOCTYPE html> 
<html manifest="demo_html.appcache">
<head lang="en">
<link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Lato|Roboto" rel="stylesheet">
<meta charset="utf-8">
<style>

	#miresevini{
    font-size:50px;
    font-family: myFirstFont;
    font-weight: bold;
    color: brown;
    text-align: center;
    text-shadow: -1px 0 #746F14,0 1px #746F14,1px 0 #746F14,0 -1px  #746F14; 
    float:center;
}
@font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
}
.box {
  float: right;
    right: 0;
    bottom: 0;
    border: 1px solid black;
    padding: 15px;
    border-radius: 7px;
    padding: 20px;
    margin-bottom: 10px;
}
#teksti{
    float: center;
    font-family: Verdana;
}

#submit1 {
    width: 100%;
    background-color: #4A73A3;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#submit1:hover {
    background-color: #7A9EC8;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Permbajtja e sllajdit */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* butonet prapa-para */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Poziciono butonin "para' ne te djathte */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* Kur butonet jane ne poziten'hover', shtoje nje prapavije si te zeze*/
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


/* Numrat qe tregojne cili sllaj eshte me radhe (1/3, 2/3, 3/3) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Pikat ne fund te sllajdit */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Kapercimi i sllajit/cngjyrosja*/
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

</style>

<title>Lexo Online</title>
</head>
<body> 
<?php include ('header.php'); ?>
<h1>Lexo Online</h1>
<div style="border: 1px solid transparent;">
<div id="body">
<br>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/s1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/s2.jpg" style="width:100%">
 </div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/s3.jpg" style="width:100%">
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

var now = new Date();
var hours = now.getHours();
document.bgColor="#CC9900";

	
if (hours < 8){
document.write ('<body style="background-color: #EAEDF1">');
}
else if (hours>8){
document.write ('<body style="background-color: #FFFFFF">');
}
else {
document.write ('<body style="background-color: #DEE5EE">');
}
</script>

<div id="teksti" >
<h1 id="miresevini">Miresevini ne Lexo Online</h1>
<br>
    <div style="text-align: justify-all;  margin-left:200px;width:800px; float:center; word-wrap: nowrap;">
    <p style="line-height: 150%; font-size:20px;   float:center; font-family: Saira, sans-serif;
">E-learning është perdorimi i teknologjisë për të mundesuar njerëzve për të mësuar ne çdo kohë dhe kudo. E-Learning është një formë elektronike e mësimit që bazohet në një teknologji të avancuar.<br> E-Learning të mundëson të mësoni në klasë, në grup, dhe kudo që ka pajisje komjuterike të konfiguruar. Magjia e e-Learning qëndron në faktin se software i ri të lejon krijimin e një ambienti efektiv të mësimit.<br>E rëndësishme është të ceket fakti se e-Learning së pari ka funksionuar në SHBA, prej së cilës kanë arritur të punojnë edhe shumë shtete te tjera. <br>Thënë me ndryshe E-learning është një qasje e re e cila përmban në vete të mësuarit në njërën anë dhe teknologjinë informative dhe kompjuterët në anën tjetër. Është shtrirje e të mësuarit dhe internetit në një vend.</p>
<br><br>

    </div>
</div>
