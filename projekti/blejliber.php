<!DOCTYPE html> 
<html manifest="demo_html.appcache">
<head lang="en">
<link rel="stylesheet" type="text/css" href="index.css">
<link href="https://fonts.googleapis.com/css?family=Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Lato|Roboto" rel="stylesheet">
<meta charset="utf-8">
<style>
p.dotted{outline-style: dotted;}
#body {
	margin-left:150px;
	margin-right:150px;
}
#libra {
    margin: 0;
    padding-left:260px;

    }
#libri1 {
	float:left;
}
#libri2{
	float:left;
  font-size: 15px;
}
#libri3 {
	float:left;
  font-size: 15px;

}
#libri4 {
	float:left;
  font-size: 15px;

}
#box {
	float: right;
    right: 0;
    bottom: 0;
    border: 4px solid black;
    padding: 15px;
    border-radius: 30px;
	border-color: brown;
    padding: 20px;
    margin-bottom: 10px;

}

</style>
</head>
<body>
<?php include ('header.php'); ?>
<div id="body">
<div id="libri1">
<div style="float:left;">
<figure>
<img src="images/libri1.jpg" width="175px">
	<figcaption>Përgjigje të shkurtra <br>për pyetjet madhore </figcaption>
	</figure></div>

	<div style="float:right; padding-top:20px;"><button onclick="FunksioniI()">Perkthe librin!</button>
	<p><button onclick="clickCounter()" type="button" href="lajme.html">Lexo!</button></p>
	<button onclick="loadPershkrimi()">Pershkrimi!</button>
	<div id="content"> </div>
		
	<script>
function loadPershkrimi() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "text.txt", true);
  xhttp.send();
}
</script>
<div id="result"></div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</div>
</div>

<div id="libri2">
<div style="float:left;">
 <figure>
    <img src="images/libri2.jpg" width="175px" height="254px">
    <figcaption> Plaku dhe Deti</figcaption>
	</figure>
</div>
	<div style="float:right;"><pre>
Libri: Plaku dhe Deti
Gjinia: Roman
Cmimi: 6 euro
Autori: Ernest Hemingway
Detaje të librit: Botim i vjeter
Shtëpia Botuese: Kokona
Fletët: 88</pre>
	</div>
	<br>
</div>



<div id="libri3">
<div style="float:left; ">
<figure>
    <img src="images/libri3.jpg" width="175px" height="254px">
    <figcaption>Sikur te isha djale</figcaption>
	</figure>
</div>
<div style="float:right;">
<pre>
Libri: Sikur te isha djale
Gjinia: Roman
Cmimi: 8 euro
Autori: Haki Stermilli
Detaje të librit: Botim i ri
Shtëpia Botuese: UEGEN  
Fletët: 192</pre>
</div>
</div>
<div id="libri4">
<div style="float:left; ">
<figure>
    <img src="images/libri4.jpg" width="175px" height="254px">
    <figcaption>Darka e Gabuar</figcaption>
	</figure>
</div>
<div style="float:left;">
<pre>
Libri: Darka e Gabuar
Gjinia: Roman
Cmimi: 10 euro
Autori: Ismail Kadare
Detaje të librit: Botim i ri
Shtëpia Botuese: DUKAGJINI  
Fletët: 208</pre>
</div>
</div>	
		
