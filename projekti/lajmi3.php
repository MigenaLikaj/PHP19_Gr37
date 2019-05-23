<!DOCTYPE html>

<html manifest="demo_html.appcache">
<head lang="en">
<link rel="stylesheet" type="text/css" href="index.css">
<style>
 
.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;

	}
	.lajmi1
	{
	margin: auto;
    width: 60%;
    padding: 10px;
	}

</style>
	
</head>
<body>

<?php include ('header.php'); ?>

<h1 style="text-align:center; font-family:arial;" > Librat qe zhvillojne inteligjencen dhe forcojne memorien </h1>
	<div class="lajmi1">

<img style="position:relative" src="images\lajmi3.jpg" alt="Librat qe zhvillojne inteligjencen dhe forcojne memorien">
	<br><br><br>

<?php
$myfile = fopen("lajmi3.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo utf8_encode(fgets($myfile)) . "<br>";
}
fclose($myfile);
?>

	</div>
	<?php include ('footer.php'); ?>


</body>
</html>
