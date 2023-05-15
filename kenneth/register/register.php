
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
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
:root{
		--dark-violet:rgba(17,0,44);s
		--violet:rgba(157,78,221);
	}
	*{
		font-family: 'Poppins', sans-serif;

	}
	body{
	 background-image: url("https://wallpapercave.com/wp/wp5126947.jpg");
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
		max-height: 450px;
		width: 100%;
		max-width: 550px;
		height: 100%;
		
		border-radius: 20px;
		
		-webkit-animation: pop 1s ease;
	}
	@-webkit-keyframes pop{
		from{
			opacity: 1;
			transform: translateY(100px);
		}
		to{
			opacity: 1;
			transform: translateY(1px);
		}
	}
    .form-group{
    	margin: 20px auto;
    	width: 400px;
    }
    .form-group:last-child{
    	margin-top: 35px;
    }
    .form-group label{
    font-weight: 400;	
    }
	.form-control{
		width: 400px;
		height: 45px;
		background: rgb(0,0,0, 0.3);
		border-radius: 20px;
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
       font-size: 25px;
      
	}
	form{
		margin: 0 auto;
		max-width: 500px;
		width: 100%;
	}
	.btn{
	 background-color: rgba(157,78,221);
	 color:white;	 
	 padding:10px 35px;
	 width: 100%;
	 border-radius: 5px;
	 border:1px solid white;
	 transition: .1s;
	}
	.btn:hover{
		 background-color: var(--dark-violet);
		color:white;
	}

	.Register{
		height: 50px;
		width: 100%;
		display: flex;
		font-size: 17px;
		justify-content: center;
		align-items: center;
	}

	.Register span{
	  color:orange;
	  cursor: pointer;
	}
</style>
<body>

<div class="container-fluid">
  <div class="-form">
  	<div class="col d-flex">
  		<h2>Sign Up Form</h2>
  	</div>
  	 <form action="registerPHP.php" method="post">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
    	<button type="submit" name="submit" class="btn btn-default">Register</button>
    	<div class="Register">Have an account? &nbsp; <a href="login.php"><span>back to login</span></a></div>
    </div>
  </form>
  </div>
</div>
</body>
</html>