<!DOCTYPE html> 
<html manifest="demo_html.appcache">
<head lang="en">
<link rel="stylesheet" type="text/css" href="index.css">
<link href="https://fonts.googleapis.com/css?family=Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Lato|Roboto" rel="stylesheet">
<meta charset="utf-8">
<style>
#body {
	margin-top:70px;
	margin-left:70px;
	margin-right:70px;
	clear:both;
	background-image:url("images/liber.jpg");

}
#thenie {
    border:1px solid transparent;
	font-family: Segoe Print;
	font-size: 12px;
	clear:both;
	height:500px;
}
#thenietleft {
	margin-top:30px;
	float:left;
    height: 100px;
    border: 1px solid transparent;
    border-radius: 5px;

}
#thenieright {
	float:right;
	margin-top:30px;
    height: 100px;
    border: 1px solid transparent;
    border-radius: 5px;
	}
pre {
	font-family: Segoe Print;
	font-size: 15px;
	font-weight: bold;
}
</style>
</head>
<body>
 <?php include ('header.php'); ?>
 <div class="section">
<div id="body">
<div id="teksti">
<?php
echo "<pre style='text-align:center; font-size:20px'>
	Lexo Online është platformë online për leximin e librave.
Qëllimi i krijimit të një hapësire të tillë ështe mungesa e materialeve
të mirëfillta për kulturën shqiptare dhe ndërkombëtare, përkatësisht.
	Kjo platforme, përveç librave, mundëson edhe leximin e lajmeve të
fundit për kulturë,shkarkimin e libra shqip dhe anglisht, diskutimin
e çështjeve në të mirë të publikut.
Për çdo koment, kritikë, apo propozim, na kontaktoni!</pre>"
?>
<br><br><br><br><br>
</div>
<div id="thenie" style="float:center;">
<div id="thenietleft" >
<pre style="transform: rotate(10deg);">Jo të gjithë lexuesit janë udhëheqës, 
    por të gjithë liderët janë lexues. (Harry Truman)

</pre>
<pre style="transform: rotate(10deg);">Librat shërbejnë t’i tregojnë njeriut se këto
 mendime origjinale të tijat nuk janë assesi aq të reja. (Barack Obama)
</pre>
</div>
<div id="thenieright">
<pre style="transform: rotate(-10deg);">Leximi është ende mënyra kryesore që unë të mësoj gjëra të reja 
    dhe të provoj mirëkuptimin tim. (Bill Gates)


</pre>
<pre style="transform: rotate(-10deg);">Miku im më i mirë është një person që do të më
 japë një libër që nuk e kam lexuar. (Abraham Lincoln)
</pre>
</div>
</div>
</div>
</div>
<div style="clear:both; float:center; text-align:center ;font-size:30px; border:1px solid black; margin-bottom:20px;">
<a href="Geolocation.html">KLIKO PER TU ORIENTUAR! </a>
</div>

<?php include ('footer.php'); ?>
</body>
</html>

