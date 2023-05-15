<?php require 'connections.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <!--FOTNS-->
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
    --lighter-blue:#B5E1E3;
  --light-blue:#9ED8DB;
  --mid-blue:#467599;
  --dark-blue:#1D3354;
}
  *{
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
  
  @-webkit-keyframes pop{
    from{
      opacity: 1;
      transform: scale(.95);
    }
    to{
      opacity: 1;
      transform: scale(1);
    }
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
    width: 50%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--lighter-blue);
    -webkit-animation:pop 1s ease;
    
  }
  #error{
        position:absolute;
        top:0;
        color: red;
        width: 100%; 
        height:50px; 
        display:flex; 
        justify-content:center;
        background:rgb(255,0,0,.3);
        align-items:center;
        padding-left: 20px; 
        font-size: 19px;
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
</style>
<body>
<?php 

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
      header("Location:index.php");
      exit();
    }
    else{
      $password_err ='<span id="error">wrong password</span>';
    }
  }
  else{
    $password_err ='<span id="error">User not registered</span>';
  }
}
?>
<div class="-container-fluid">
<?php echo $password_err; ?>
  <div class="col d-flex">
      <h2>Login Form</h2>
    </div>
  <div class="-form">
     <form action="" method="post" autocomplete="off">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <button type="submit" name="login" class="btn btn-default">Login</button>
      <div class="-register"><a href="register.php"><span>Register here!</span></a></div>
    </div>
  </form>
  </div>
</div>
</body>
</html>