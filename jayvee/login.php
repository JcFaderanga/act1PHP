<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<?php 
require 'connections.php';
if(!empty($_SESSION["id"])){
  header("Location: login.php");
}
$password_err = "";
if(isset($_POST["login"])){
  $usernameemail = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($connections, "SELECT * FROM register WHERE username = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location:index.html");
      exit();
    }
    else{
      $password_err ='<script>alert("Wrong password");</script>';
    }
  }
  else{
    $password_err ='<script>alert("No records");</script>';
  }
}
?>
<body>
<div class="container-fluid">
  <div class="-form">
    <div class="col">
      <h2>Login</h2>
    </div>
    
     <form action="" method="post" autocomplete="off">
    <div class="form-group">
      <input type="email" class="form-control" id="username" placeholder="Enter Username" name="username" required>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"  required>
    </div>
    <div class="form-group">
      <button type="submit" name="login" class="btn btn-default">Login</button>
      <div class="-register"><a href="register.php"><span>SignUp here!</span></a></div>
    </div>
  </form>
  </div>
</div>
</body>
</html>