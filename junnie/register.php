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
<body>
<div class="container-fluid">
  <div class="-form">
    <div class="col">
      <h2>Sign Up</h2>
    </div>
     <form action="registerPHP.php" method="post" autocomplete="off">
    <div class="form-group">
      <input type="email" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
    <div class="register"><a href="login.php"><span>Go to login</span></a></div>
  </form>
  </div>
</div>
</body>
</html>