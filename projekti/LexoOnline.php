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
