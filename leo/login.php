
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
      header("Location: ../index.html");
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
  <title>Login</title>
  <!--FOTNS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	*{
		font-family: 'Poppins', sans-serif;

	}
	body{
	 background-image: url("https://cdnb.artstation.com/p/assets/images/images/019/170/273/large/ford-nguyen-city-street.jpg?1562315890");
	 background-size: cover;
	}
	.container-fluid{
		color:white;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color: rgba(0, 0, 0, .3); 
        backdrop-filter: blur(3px);
	}
	.-form{
		width: 100%;
		max-width: 500px;

		backdrop-filter: blur( 5px);
		background: rgba(0,0,0,0.1);
		border: 1px solid rgba(255,255,255,0.4);
		border-radius: 20px;
		box-shadow: rgba(0,0,0, 0.25) 0px 5px 15px;
		-webkit-animation: pop 1s ease;
	}

    .form-group{
    	margin: 20px auto;
    	max-width: 400px;
    	width: 100%;
    }
    .form-group:last-child{
    	margin-top: 35px;
    }
    .form-group label{
    font-weight: 400;	
    }
	.form-control{
		width: 100%;
		max-width:400px;
		border-radius: 20px;
		height: 45px;
		background: rgb(0,0,0, 0.3);
		color: white;
		font-size: 16px;
		border: 1px solid white;
	}
	.form-control::placeholder{
		color: white;
	}
	.col{
	   display: flex;
	   justify-content: center;
       align-items: center;
       height: 100px;
      
	}
	form{
		margin: 0 auto;
		max-width: 500px;
		width: 100%;
	}
	.btn{
	 background-color: rgb(0,0,255, 0.6);
	 color:white;	 
	 padding:10px 35px;
	 width: 100%;
	 border-radius: 10px;
	 border:1px solid rgb(0,0,255, 0.5);
	 transition: .1s;
	}
	.btn:hover{
		 background-color: rgb(0,0,255, 0.6);
		color:white;
	}

	.-register{
		height: 50px;
		width: 100%;
		display: flex;
		font-size: 17px;
		justify-content: center;
		align-items: center;
	}

	.-register span{
	  color:yellow;
	  cursor: pointer;
	}
</style>
<body>


<div class="container-fluid">
  <div class="-form">
  	<div class="col d-flex">
  		<h2>Login Form</h2>
  	</div>
  	 <form action="" method="post" autocomplete="off">
    <div class="form-group">
      <input type="email" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
    	<button type="submit" name="login" class="btn btn-default">Login</button>
    	<div class="-register">Join us &nbsp; <a href="register.php"><span>Register</span></a></div>
    </div>
  </form>
  </div>
</div>
</body>
</html>