<?php 
require 'connections.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
$password_err = "";
if(isset($_POST["login"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($connections, "SELECT * FROM tbl_informations WHERE username = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
      exit();
    }
    else{
      $password_err ='<div class="error-message-password">wrong password</div>';
    }
  }
  else{
    $password_err ='<div class="error-message-password">User not registered</div>';
  }
}


/*
if(isset($_SESSION)){
    session_start();
}
include_once("connections.php");

$con = connections();

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_informations WHERE username='$user' AND password='$password'";

$user = $con->query($sql) or die ($con->error);
$row = $user->fetch_assoc();
$total = $user->num_rows;

if($total > 0){
    $_SESSION['UserLogin'] = $row['username'];
    $_SESSION['Access'] = $row['access'];
    header("location: index.php");
}
else{
    echo "no user found";
}
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = mysqli_real_escape_string($mysqli, $_REQUEST['username']);
    $password = mysqli_real_escape_string($mysqli, $_REQUEST['password']);

$sql = "SELECT * FROM tbl_informations WHERE username='$user' AND password='$password'";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            header("location: index.php");
            exit();
        } else{
                $incorrect= '<div class="alert alert-danger"><em>Incorrect credentials!</em></div>';
            }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
    $mysqli->close();*/
?>

