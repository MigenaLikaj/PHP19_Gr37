<!DOCTYPE html>

<html manifest="demo_html.appcache">

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

<h1 style="text-align:center; font-family:arial;" > Kryeqyteti ka fluksin me te madh te studenteve ,mirepo ata me se paku blejne libra </h1>
	<div class="lajmi1">
	<p style="text-align:justify; margin-left:100px; margin-right:100px; font-size:18px; font-family:Times New Roman;">
		<img style="position:relative" src="images\lajmi6.jpg" alt="Kryeqyteti ka fluksin me te madh te studenteve ,mirepo ata me se paku blejne libra">
	<br><br><br>	
		
<?php
$myfile = fopen("lajmi6.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo utf8_encode(fgets($myfile)) . "<br>";
}
fclose($myfile);
?>
