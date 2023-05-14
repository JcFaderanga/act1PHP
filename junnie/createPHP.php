<?php
include_once("connections.php");
$firstname = $surname = $middlename ="";
	if (isset($_POST['submit'])) {
if($_SERVER["REQUEST_METHOD"]=="POST"){

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$surname = $_POST['surname'];

}
if($firstname && $middlename && $surname){
  $query = mysqli_query($connections, "INSERT INTO crud (firstname,surname,address) VALUES ('$firstname','$surname','$middlename')");
}
header("location: search.php");
$success = "<p style='color:green;'>Successfully Inserted data into the database!</p>";
}
?>