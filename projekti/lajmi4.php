<!DOCTYPE html>
<html manifest="demo_html.appcache">
<head lang="en">
<link rel="stylesheet" type="text/css" href="index.css">
<style>
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

<h1 style="text-align:center; font-family:arial;" > Shkenca është e pamjaftueshme për ta njohur të vërtetën </h1>
	<div class="lajmi1">

		<img style="position:relative" src="images\lajmi4.jpg" alt="Shkenca është e pamjaftueshme për ta njohur të vërtetën">
	<br><br><br>
	<?php
$myfile = fopen("lajmi4.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo utf8_encode(fgets($myfile)) . "<br>";
}
fclose($myfile);
?>

	</div>

	
<?php include ('footer.php'); ?>

</body>
</html>

