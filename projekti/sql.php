<?php
$sql = "CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
)";
$host='localhost';
$username='root';
$password='';
$dbase='elearning';
$conn = mysqli_connect($host,$username,$password,$dbase);
if($conn){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}
print(mysqli_query($conn,$sql));
?>
