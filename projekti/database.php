<?php
session_start();
$username = "";
$email    = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'elearning');
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
        array_push($errors,"Only letters and white space allowed");}
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, "Invalid email format"); } 

  if (strlen($_POST["password_1"]) <= '8') {
            array_push($errors, "Your Password Must Contain At Least 8 Characters!");
        }
        elseif(!preg_match("#[0-9]+#",$password_1)) {
            array_push($errors ,"Your Password Must Contain At Least 1 Number!");
        }
        elseif(!preg_match("#[A-Z]+#",$password_1)) {
            array_push($errors,"Your Password Must Contain At Least 1 Capital Letter!");
        }
        elseif(!preg_match("#[a-z]+#",$password_1)) {
           array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter!");
        } else {
            array_push($errors, "Please Check You've Entered Or Confirmed Your Password!");
        }
	
	
$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);

    $user=mysqli_fetch_array($results);
	  
	  if(mysqli_num_rows( $results ) > 0 ){
        $_SESSION['user_name'] = $user; 
        echo "<script>window.open('index.php','_self');</script>"; 
 
    }
    else{
        echo "<script>alert('Username Or Password is incorrect !!!');</script>";
    }
	  
	  if($user){
    if(!empty($_POST["remember"])) {
  setcookie ("username",$_POST["username"],time()+ 365*10*24*60*60);
  setcookie ("password",$_POST["password"],time()+ 365*10*24*60*60);
  echo "Cookies Set Successfuly";
} else {
  setcookie("username","");
  setcookie("password","");
  echo "Cookies Not Set";
}
      header('location: LexoOnline.php');

  }
  else{
    $message="Invalid Login";
  }
  }
}
?>
