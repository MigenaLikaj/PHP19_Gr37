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
<script>
function FunksioniI() {
    alert("Perkthimi i librit nuk eshte i gatshem!");
}
<!--web storage-->
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 0;
        }
        document.getElementById("result").innerHTML = "Ju keni lexuar " + localStorage.clickcount + " here.";
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}

</script>
</div>
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br>

<div id="box">
			<legend><h3>Porosit njerin nga librat ne dispozicion</h3> </legend>
			<form method="POST" action="librat.php" name="formaregjistrimit">
						<label for="emri">Emri: </label><br>
						<input type="text" id="emri" name="emri" placeholder="Emri juaj.."><br><br>
						<label for="mbiemri">Mbiemri</label><br>
						<input type="text" id="mbiemri" name="mbiemri" placeholder="Mbiemri juaj.."><br>

						</br>
	  Zgjedh librin qe deshiron te porositesh:</br>
                        <input type="checkbox" name="Pergjigje" value="Përgjigje të shkurtra për pyetjet madhore"/>Përgjigje të shkurtra për pyetjet madhore</br>
                        <input type="checkbox" name="PlakuDeti" value="Plaku dhe Deti"/>Plaku dhe Deti</br>
                        <input type="checkbox" name="Djale" value="Sikur te isha djale "/>Sikur te isha djale</br>
                        <input type="checkbox" name="DarkaGabuar" value="Darka e Gabuar"/>Darka e Gabuar</br>
                       

						<input type="submit" name="submit"/><br>


            </form>
</div>

<div>
<div class="librat" style="float:left;">
<figure>

<img src="images/lsh.png" alt="Library" usemap="#librat"/>
<map name="librat">
  <area shape="rect" coords="1,0,200,300" alt="Libri4" href="libri1.php ">
  <area shape="rect" coords="200,0,400,600" alt="Libri5" href="libri2.php">
  <area shape="rect" coords="400,0,600,800" alt="Libri6" href="libri3.php">
</map>
<br>

<figcaption><b>LIBRAT ME TE SHITUR SHQIP PER VITIN 2019</b></figcaption>

</figure>
</div>

<div class="map" style="float:right;">
<figure>

<img src="images/la.jpg" alt="Library" usemap="#map" width="600px" height="300px"/>
<map name="map">
  <area shape="rect" coords="1,0,200,300" alt="Libri1" href="libri4.php">
  <area shape="rect" coords="200,0,400,600" alt="Libri2" href="libri5.php">
  <area shape="rect" coords="400,0,600,800" alt="Libri3" href="libri6.php">
</map>
<br>

<figcaption><b>LIBRAT ME TE SHITUR ANGLISHT PER VITIN 2019</b></figcaption>

</figure>
</div>
</div>
<?php include ('footer.php'); ?>

</body>
</html>

		
