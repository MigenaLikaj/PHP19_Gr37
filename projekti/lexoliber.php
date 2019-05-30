<!DOCTYPE html>
<html manifest="demo_html.appcache">
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<title> Lexo Liber </title>
<style>
#libra {
    margin-top: 10px;
    padding-left:30px;
    }
.carousel {
  padding: 20px;
  -webkit-perspective: 500px;
          perspective: 500px;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.carousel > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
}
.carousel figure {
  margin: 0;
  width: 400px;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform-origin: 50% 50% -482.8427124746px;
          transform-origin: 50% 50% -482.8427124746px;
}
    
   .carousel figure img {
  width: 100%;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0 40px;
  opacity: 0.9;
}
    
.carousel figure img:not(:first-of-type) {
  position: absolute;
  left: 0;
  top: 0;
  -webkit-transform-origin: 50% 50% -482.8427124746px;
          transform-origin: 50% 50% -482.8427124746px;
}
.carousel figure img:nth-child(2) {
  -webkit-transform: rotateY(0.7853981634rad);
          transform: rotateY(0.7853981634rad);
}
.carousel figure img:nth-child(3) {
  -webkit-transform: rotateY(1.5707963268rad);
          transform: rotateY(1.5707963268rad);
}
.carousel figure img:nth-child(4) {
  -webkit-transform: rotateY(2.3561944902rad);
          transform: rotateY(2.3561944902rad);
}
.carousel figure img:nth-child(5) {
  -webkit-transform: rotateY(3.1415926536rad);
          transform: rotateY(3.1415926536rad);
}
.carousel figure img:nth-child(6) {
  -webkit-transform: rotateY(3.926990817rad);
          transform: rotateY(3.926990817rad);
}
.carousel figure img:nth-child(7) {
  -webkit-transform: rotateY(4.7123889804rad);
          transform: rotateY(4.7123889804rad);
}
.carousel figure img:nth-child(8) {
  -webkit-transform: rotateY(5.4977871438rad);
          transform: rotateY(5.4977871438rad);
}
.carousel nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 20px 0 0;
}
.carousel nav button {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  margin: 0 5px;
  cursor: pointer;
  color: #333;
  background: none;
  border: 1px solid;
  letter-spacing: 1px;
  padding: 5px 10px;
}


</style>
    </head>
  <body>
<?php include ('header.php'); ?>
<div class="carousel">
  <figure>
    <img height="300px" src="images/t1.jpg" alt="thenia e pare" id="1">
    <img height="300px" src="images/t2.jpg" alt="thenia e dyte">
    <img height="300px" src="images/t3.jpg" alt="thenia e trete">
    <img height="300px" src="images/t4.jpg" alt="thenia e katert">
    <img height="300px" src="images/t5.jpg" alt="thenia e peste">
    <img height="300px" src="images/t6.jpg" alt="thenia e gjashte">
  </figure>
  <nav>

		<button id="next">Next</button>
	</nav>
</div>
<p>

<script>

var array = ["images/t1.jpg","images/t2.jpg","images/t3.jpg","images/t4.jpg","images/t5.jpg","images/t6.jpg"];
var i = 0;

window.onload = function(){
    var button = document.getElementById("next");
    next.onclick = function1;

    }

function function1(){
  var photo =  document.getElementById("1");
  var array = ["images/t1.jpg","images/t2.jpg","images/t3.jpg","images/t4.jpg","images/t5.jpg","images/t6.jpg","images/t1.jpg"];

  photo.src = array[i];
  i++;
  if (i > 6) { i = 0; }
   }

</script>
<div id="libra">
<img src="images/TomSawyer.png" width="220" height="277" alt="Hamleti">
<cite><span style="color:red; font-weight:bold;">
<a style="text-decoration:none" href="https://www.planetebook.com/free-ebooks/the-adventures-of-tom-sawyer.pdf">The Adventures of Tom Sawyer</a>
</span></cite> 

<img src="images/WarPeace.png" width="220" height="277" alt="Oliver">
<cite>
<span style="color:lightseagreen; font-weight:bold;">
<a style="text-decoration:none" href="https://www.planetebook.com/free-ebooks/war-and-peace.pdf">War and Peace&nbsp;&nbsp;&nbsp;&nbsp;</a>
</span>
</cite> 

<img src="images/Iliad.png" width="220" height="277" alt="harrypotter">
<cite><span style="color:orange; font-weight:bold;"><a style="text-decoration:none" href="https://www.planetebook.com/free-ebooks/the-iliad.pdf">The Iliad</a></span></cite> 
</div>

</br> </br> </br> </br> </br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<img href= "" src="images/TheHoundoftheBaskervilles.png" width="220" height="277" alt="TheHoundoftheBaskervilles">
<cite><span style="color:orange; font-weight:bold;"><a style="text-decoration:none" href="https://www.planetebook.com/free-ebooks/the-hound-of-the-baskervilles.pdf">The Hound of the Baskervilles</a></span></cite>  

<img src="images/PrideandPrejudice.png" width="220" height="277" alt="PrideandPrejudice">
<cite><span style="color:orange; font-weight:bold;"><a style="text-decoration:none" href="https://www.planetebook.com/free-ebooks/pride-and-prejudice.pdf">Pride and Prejudice</a></span></cite> 

<img src="images/OliverTwist.png" width="220" height="277" alt="OliverTwist">
<cite><span style="color:orange; font-weight:bold;"><a style="text-decoration:none" href="https://www.planetebook.com/free-ebooks/oliver-twist.pdf">Oliver Twist</a></span></cite> </br> </br></br> </br>


<?php include ('footer.php'); ?>

</body>
</html>
