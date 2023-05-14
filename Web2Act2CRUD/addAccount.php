
<?php
include_once("connections.php");
$username = $password = $firstname = $surname =$address = "";
	if (isset($_POST['submit'])) {
if($_SERVER["REQUEST_METHOD"]=="POST"){

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$address = $_POST['address'];
}
if($username && $password && $firstname && $surname && $address){
  $query = mysqli_query($connections, "INSERT INTO tbl_informations(username,password,firstname,surname,address) VALUES ('$username', '$password', '$firstname', '$surname', '$address')");
}
header("Location: index.php");
echo "<script>alert('Account successfully registered');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--FOTNS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
  .container-addAcc{
      width:100%;
      height:100%;

  }
  .form-container{
         margin-top: 80px;
    }  
    .register-form-group{
    width: auto;
    height: auto;
    display: grid;
    grid-template-columns: repeat(2, 350px);
    grid-template-rows: repeat(4,auto);
    justify-content: center;

}
#Address-fieldset{
    height: 100px;
    font-weight: 400;
}
 fieldset {
	border: 1px solid rgba(0,0,0);
	border-radius: 10px;
	width: 100%;
	margin-bottom: 15px;
	position: relative;
	height: 60px;
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
    font-weight: 400;
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
    font-weight: 400;
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
    border: 2px solid blue;
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

.header-add{
    width:100%;
    height:50px;
    display: flex;
    align-items: center;
    font-size: 20px;
    padding: 0 20px;

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
</style>
<body>
  <div class="container-addAcc">
  <div class="header-add">
  </div>
    <form id="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-container">
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
                <button type="submit" name="submit">Register Account</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
</body>
</html>

