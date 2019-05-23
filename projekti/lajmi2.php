<!DOCTYPE html>

<html manifest="demo_html.appcache">
<head >
<head lang="en">
<link rel="stylesheet" type="text/css" href="index.css">
<style>

	.lajmi1
	{
	margin: auto;
    width: 80%;
    padding: 10px;
	}

</style>
</head>
<body>

<?php include ('header.php'); ?>

<h1 style="text-align:center; font-family:arial;" > “Një libër, një laps, një fëmijë dhe një mësues mund ta ndryshojnë botën”</h1>
	<div class="lajmi1">

<p style="text-align:justify; margin-left:100px; margin-right:100px; font-size:18px; font-family:Times New Roman;">
		<img style="position: relative" src="images\lajmi2.jpg" alt="Një libër, një laps, një fëmijë dhe një mësues mund ta ndryshojnë botën">
	<br><br><br>
<?php
$myfile = fopen("lajmi2.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo utf8_encode(fgets($myfile)) . "<br>";
}
fclose($myfile);
?>
	</div>
<?php include ('footer.php'); ?>

</body>
</html>
