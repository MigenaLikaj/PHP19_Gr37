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
  } 
  else 
  {
     $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }


if(!empty($_POST["password_1"]) && ($_POST["password_1"] == $_POST["password_2"])) {
        $password_1 = test_input($_POST["password_1"]);
        $password_2 = test_input($_POST["password_2"]);
        if (strlen($_POST["password_1"]) <= '8') {
            $password_1Err = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password_1)) {
            $password_1Err = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password_1)) {
            $password_1Err = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password_1)) {
            $password_1Err = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $password_2Err = "Please Check You've Entered Or Confirmed Your Password!";
        }
    }
 ?>
