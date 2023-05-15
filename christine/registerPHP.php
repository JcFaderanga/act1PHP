<?php
include_once("connections.php");

$username = $password = $gmail = "";
	if (isset($_POST['submit'])) {
if($_SERVER["REQUEST_METHOD"]=="POST"){

$username = $_POST['username'];
$password = $_POST['password'];
$gmail = $_POST['gmail'];
}
if($username && $password && $gmail){
  $query = mysqli_query($connections, "INSERT INTO register(username,password,gmail) VALUES ('$username', '$password', '$gmail')");
}
header("location: login.php");
}
?>