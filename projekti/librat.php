<?php
$Pergjigje = $PlakuDeti = $Djale = $DarkaGabuar = "" ;

if(isset($_POST['Pergjigje'])){

   $Pergjigje =$_REQUEST['Pergjigje'];
	echo "Ju keni porositur ".$Pergjigje."</br>";
}

if(isset($_POST['PlakuDeti']))
	{

   $PlakuDeti = $_REQUEST['PlakuDeti'];
 
	echo "Ju keni porositur ".$PlakuDeti."</br>";
}
   
if(isset($_POST['Djale']))
 {

	$Djale =$_REQUEST['Djale'] ;
	echo "Ju keni porositur ".$Djale."</br>";
}
if(isset($_POST['DarkaGabuar']))
{
	$DarkaGabuar=$_REQUEST['DarkaGabuar'];
	echo "Ju keni porositur ".$DarkaGabuar."</br>";
}   
if (($Pergjigje=="")&&($PlakuDeti=="")&&($Djale=="")&&($DarkaGabuar==""))
{
	echo "Nuk keni porositur asnje liber"."</br>";
}   
?>

