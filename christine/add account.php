
<!DOCTYPE html>
<html lang="en">
<head>
  <title>register</title>
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
    --lighter-blue:#B5E1E3;
  --light-blue:#9ED8DB;
  --mid-blue:#467599;
  --dark-blue:#1D3354;
}
  *{
      padding: 0;
    margin: 0;  
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    font-family: 'Poppins', sans-serif;
  }
  body{
    

  }
  .-container-fluid{
    color:white;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  

    .form-group{
      margin: 20px auto;
      width: 300px;
    }
    .form-group:last-child{
      margin-top: 35px;
    }
    .form-group label{
    font-weight: 400; 
    font-size: 18px;
    color: var(--dark-blue);
    }
  .form-control{
    width: 300px;
    height: 40px;
    color: var(--dark-blue);
    font-size: 16px;
    border-radius: 15px;
    border: 1px solid var(--dark-blue);
  }
  .form-control::placeholder{
    color: var(--dark-blue);

  }
  .form-control:focus{
    color: var(--dark-blue);
    box-shadow: rgba(29, 51, 84, .3) 0px 2px 4px 0px, rgba(29, 51, 84, .4) 0px 2px 16px 0px;
         border: 1px solid var(--dark-blue);
  }
  
  .col{
     display: flex;
     justify-content: center;
      align-items: center;
      font-weight: 300;
       height: 100vh;
       width: 50%;
       color: var(--dark-blue);
      
  }
  .col h2{
     font-size: 60px;
     font-weight: 200;
  }
  .-form{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--lighter-blue);
    -webkit-animation:pop 1s ease;
    
  }
  form{
    width: 100%;
    max-width: 550px;
     }
  .btn{
   background-color: var(--mid-blue);
   color:white;  
   width: 100%;
   padding:10px 35px;
   border-radius: 5px;
   border:1px solid var(--mid-blue);
   transition: .1s;
  }
  .btn:hover{
     background-color: var(--dark-blue);
    color:white;
  }

  .-register{
    margin: 10px 0;
    display: flex;
    font-size: 17px;
    justify-content: center;
    align-items: center;
  }

  .-register span{
    color:var(--brown);
    cursor: pointer;
  }
  nav{
		height: 60px;
		width: 100%;
		display: flex;
		align-items: center;
		justify-content: space-between;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
        background: var(--lighter-blue);
	}
	nav span{
		font-size: 20px;
	}
	nav i{
		font-size: 40px;
		cursor: pointer;
		margin: 0 20px;
			}

	.left-side{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.right-side{
        display: flex;
        align-items: center;
	}
	.right-side li{
		margin: 20px;
		cursor: pointer;
	}
    .right-side .add-account-btn{
    padding: 10px 20px;
    font-size: 15px;
    border: var(--dark-blue);
    border-radius: 20px;
    color: white;
    background: var(--dark-blue);
}

</style>
<body>	<nav>
			<div class="left-side">
			   <i id="menu" class='bx bx-menu'></i>
			   <span>Adding account</span>
			</div>
			<div class="right-side">
                <a href="landingpage.html"><li>Logout</li></a>
				<li>
                   <a href="index.php"><span class="add-account-btn">
                      Back 
                   </span></a>
                </li>
			</div>
		</nav>
<div class="-container-fluid">
  <div class="-form">
     <form action="add account php.php" method="post">
              <div class="form-group">
                <label for="email">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
              </div>
              <div class="form-group">
                <label for="pwd">Gmail:</label>
                <input type="gmail" class="form-control" id="gmail" placeholder="Enter Gmail" name="gmail" required>
              </div>
              <div class="form-group">
    	          <button type="submit" name="submit" class="btn btn-default">Submit</button>
               
              </div>
           </form>
          </div>
       
  </div>
</div>
</body>
</html>