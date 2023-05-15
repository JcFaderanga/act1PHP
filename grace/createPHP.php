<?php
include_once("connections.php");
$firstname = $surname = $address ="";
	if (isset($_POST['submit'])) {
if($_SERVER["REQUEST_METHOD"]=="POST"){

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$address = $_POST['address'];
}
if($firstname && $surname && $address){
  $query = mysqli_query($connections, "INSERT INTO crud (firstname,surname,address) VALUES ('$firstname','$surname','$address')");
}
header("location: index2.php");
$success = "<p style='color:green;'>Successfully Inserted data into the database!</p>";
}
?>