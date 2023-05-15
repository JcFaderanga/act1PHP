<?php
include_once("connections.php");

$username = $password = "";
	if (isset($_POST['submit'])) {
if($_SERVER["REQUEST_METHOD"]=="POST"){

$username = $_POST['username'];
$password = $_POST['password'];
}
if($username && $password){
  $query = mysqli_query($connections, "INSERT INTO register(username,password) VALUES ('$username', '$password')");
  
}
header("location: login.php");
}
?>
