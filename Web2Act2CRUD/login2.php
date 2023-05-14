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

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title> 
  <!--FOTNS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
  <!--ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--JQUERY-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <!--CSS-->
</head>
<style>
*{
    padding: 0;
    margin: 0;  
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    font-family: 'Poppins', sans-serif;
  }
  *::before, *::after{
    padding: 0;
    margin: 0;  
    box-sizing: border-box;
  }
  html{
    scroll-behavior: smooth;
  }
.content{
    width: 100%;
    height: 100%;
    background: rgba( 255, 255, 255, 0.5 );
    backdrop-filter: blur( 2px );
    position: absolute;
    display: flex;
    justify-content: center;
}
.particle-js{
    width: 100%;
    height: 100%;
}
.form-container{
    max-width: 450px ; /*450px max-width login form, 800px register form*/
     border-radius: 10px;
    width: 100%;
    height: auto;/*400px login form, 510px register form*/
    margin-top:30px;
    padding:0 50px 10px 50px;
    position: absolute;
    border: 1px solid rgba(0,0,0, 0.2);
    backdrop-filter: blur( 20px );
    }  

    .form-container.active-width{
        max-width: 800px ;
        width: 100%;
        max-height: auto;
        height: auto;
        overflow: hidden;
   -webkit-animation: registerWidth 2s ease ;
   }
   @-webkit-keyframes registerWidth{

     0% {
      opacity: 1;
      height: 400px;
      width: 450px;
   }
   35%{
    opacity: 1;
      height: 100px;
   }
   50%{
      opacity: 1;
      height: 100px;
      width: 800px;
   }
  100% {
      opacity: 1;
      height: auto;
        width: 800px;
  }
}
.form-container.remove{
        max-width: 800px;
        width: 450px ;
        max-height: auto;
        height: auto;
        overflow: hidden;
   -webkit-animation: login 2s ease ;
   }
   @-webkit-keyframes login{

     0% {
      opacity: 1;
      height: 510px;
      width: 800px;
   }
   50%{
      opacity: 1;
      height: 100px;
   }
  100% {
      opacity: 1;
      height: auto;
        width: 450px ;
  }
}

    .register-form-group{
    width: auto;
    height: auto;
    display: grid;
    grid-template-columns: repeat(2, 350px);
    grid-template-rows: repeat(4,auto);
    justify-content: center;

}
.login-label{
    height: 100px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-label span{
    font-size: 30px;
    font-weight: 300;
}
    fieldset {
	border: 1px solid rgba(0,0,0);
	border-radius: 10px;
	width: 100%;
	margin-bottom: 15px;
	position: relative;
	height: 60px;
}
#Address-fieldset{
    height: 100px;
}
legend{
	margin: 0 15px;
	padding: 5px;
	font-size: 16px;
}

fieldset input[type=text],
 input[type=password], 
 input[type=email]{
	width: calc(100% - 20px);
	height: 40px;
	border: none;
	border-radius: 10px;
	padding-left: 20px;
    font-size: 15px;
    background: transparent;
    position: absolute;
   top: -12px;

}

input[type=text]:focus, input[type=email]:focus, 
input[type=password]:focus-within{
    outline: none;
    background: transparent;
}
textarea{
	width: calc(100% - 20px);
	height: 100px;
	border: none;
}
fieldset textarea[type=text]{
	padding-left: 20px;
    font-size: 15px;
    height: 62px;
    background: transparent;

}
textarea[type=text]:focus{	
	outline: none;
}
button{
    margin-top: 13px;
    width: 100%;
    padding:8px 20px;
	font-size: 17px;
	color: white;
	border: 2px solid  rgb(60, 60, 253);
	background:  rgb(60, 60, 253);
    border-radius: 5px;
    cursor: pointer;
    transition: .2s;
}
button:hover{
    background: blue;
    border: 2px solid  blue;
}
.register-button{
  width: 100%;
  flex-wrap: wrap;
  display: flex;
  margin: 20px 0;
  justify-content: center;
}
.register-button label{
    color: blue;  
    cursor: pointer;
}
.register-button label:hover{
    text-decoration: underline;
}
.input-box{
    max-width: 300px;
    width: 300px;
    margin: 0 24px;
}
.input-box:nth-child(5){
    max-width: 650px;
    width: 100%;
    grid-column: span 2;
}
.input-box:nth-child(6){
    max-width: 650px;
    width: 100%;
    grid-column: span 2;
}
@media only screen and (max-width: 800px){
	.form-container{
	max-width: 450px ; /*450px max-width login form, 800px register form*/
	width: 100%; 
    height: 100vh;/*400px login form, 510px register form*/
    margin-top:0;
    padding:0 50px 10px 50px;
    position: absolute;
    border-radius: 0;
    border: none;
}
.particle-js{
    width: 100%;
    height: 100vh;
}
	.form-container.active-width{
        max-width: 100vh;
        width: 100%;
        max-height: 100vh;
        height: 100%;
        overflow: hidden;
   -webkit-animation: registerWidth 1.5s ease ;
   }
   @-webkit-keyframes registerWidth{
     0% {
      opacity: 1;
      height: 100%;
      width: 100%;
   }
   20%{
    opacity: 1;
      width: 100%;
   }
   50%{
      opacity: 1;
      height: 10%;
      width: 100%;
   }
  100% {
      opacity: 1;
      height: 100%;
        width: 100%;
  }
}
.form-container.remove{
        max-width: 450px;
        width: 100%;
        max-height: 100%;
        height: 100%;
        overflow: hidden;
   -webkit-animation: login 1.5s ease ;
   }
   @-webkit-keyframes login{

     0% {
      opacity: 1;
      height: 100%;
      width: 100%;
   }
   50%{
      opacity: 1;
      height: 10%;
   }
  100% {
      opacity: 1;
      height: 100%;
        width: 100%;
  }
}
   .register-form-group{
    width: auto;
    height: auto;
    display: flex;
    flex-wrap: wrap;
 
 }
 .input-box{
 	margin: 0;
 }
 .input-box:nth-child(5){
    max-width: 300px;
    width: 300px;
}
.input-box:nth-child(6){
    max-width: 300px;
    width: 300px;
}
}
.error-message-password{
    width:100%;
    height: 50px;
    border:1px solid rgb(255,0,0, .7);
    background: rgb(255,0,0,.1);
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: red;
}
</style>
<body>
  <div id="particle-js" class="particle-js">
    <div class="content">
      <div class="form-container">
        <div class="login-label">
           <span id="title">LOGIN</span>
        </div><!--echo htmlspecialchars($_SERVER["PHP_SELF"]); -->
        <?php echo $password_err;?>
       <form class="" action="" method="post" autocomplete="off">
           <div class="from-group" >
             <div id="login" class="text-field-mobile">
               <fieldset>
                 <legend>Username</legend>
                <input type="email" name="usernameemail" id = "usernameemail" required placeholder="Enter username here">
               </fieldset>
               <fieldset>
                    <legend>Password</legend>
                <input type="password" name="password" id = "password" required placeholder="Enter Password here">
               </fieldset>
               <button type="submit" name="login" class="btn-submit">login</button>
               <div class="register-button">
                 <span id="span-register">Dont have accout?</span>&nbsp;
                 <label id="register-now">register now!</label>
               </div>
             </div>
           </div>
        </form>
       <form style="display: none;" id="register" method="post" action="register.php">
           <div class="from-group" >
             <div class="register-form-group">
              <div class="input-box">
                <fieldset>
                 <legend>Username</legend>
                 <input id="username-login" name="username" type="email" placeholder="Enter Email here" required>
               </fieldset>
              </div>
              <div class="input-box">
                <fieldset>
                 <legend>Password</legend>
                 <input id="password-login" name="password" type="password" placeholder="Enter Password here" required>
               </fieldset>
              </div>
              <div class="input-box">
                <fieldset>
                 <legend>First Name</legend>
                 <input id="username-login" name="firstname" type="text" placeholder="Enter First name here" required>
               </fieldset> 
              </div>
              <div class="input-box">
                <fieldset>
                 <legend>Surname</legend>
                 <input id="username-login" name="surname" type="text" placeholder="Enter Surname here" required>
               </fieldset>
              </div>
              <div class="input-box">
                <fieldset id="Address-fieldset">
                 <legend>Address</legend>
                 <textarea id="product-mobile" name="address" type="text" placeholder="Enter Address here" required></textarea>
                </fieldset>
              </div>
              <div class="input-box">
                <button type="submit" name="submit" id="btn-submit">Register</button>
               <div class="register-button">
                 <label id="register-now">I already have an account</label>
               </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
 <script>
 var clicked = true;
const form = document.querySelectorAll('#register-now');
form.forEach (swtich => {
 swtich.addEventListener('click', (event) => {	
    if(clicked == true){
       setTimeout(function (){
         document.getElementById('login').style.display = "none";
         document.getElementById('register').style.display = "block";
       },900);
       document.querySelector('.form-container').classList.remove('remove');
       document.querySelector('.form-container').classList.add('active-width');
       setTimeout(function (){
        document.getElementById('title').innerHTML = "REGISTER";
       },900);
      return clicked = false;
    }else{ 
     	  setTimeout(function(){
          document.getElementById('login').style.display = "block";
	        document.getElementById('register').style.display = "none";
          document.getElementById('title').innerHTML = "LOGIN";
       	},900);
       document.querySelector('.form-container').classList.remove('active-width');
       document.querySelector('.form-container').classList.add('remove');
      return clicked = true;
    }

  });
});
</script>
</body>
</html>