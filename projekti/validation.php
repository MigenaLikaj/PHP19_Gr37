<?php
include ('database.php');
$db = mysqli_connect(DBhost , DBuser, DBpass, DBname);

$nameErr = $emailErr = $password_1Err = $password_2Err="";
$username = $email = $password_1 =$password_2= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "UserName is required";
  } else {
    $name = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
