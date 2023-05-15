<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
      header("Location:dashboard.html");
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
<div class="container" id="container">
  <div class="form-container sign-up-container">



    <form action="register.php" method="post" autocomplete="off">
      <h1>Create Account</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span>or use your email for registration</span>
      <input type="email" name="username" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <button type="submit" name="submit">Sign Up</button>
    </form>
  </div>


  <div class="form-container sign-in-container">



    <form action="" method="post" autocomplete="off">
      <h1>Sign in</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span>or use your account</span>
      <input type="email" name="username" placeholder="Email" />
      <input type="password" name="password" placeholder="Password" />
      <a href="#">Forgot your password?</a>
      <button type="submit" name="login">Sign In</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
     
        <button class="ghost" id="signIn">Sign In</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Friend!</h1>
     
        <button class="ghost" id="signUp">Sign Up</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
 const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});
</script>
</body>
</html>