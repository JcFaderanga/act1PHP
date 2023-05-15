<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
    :root{
    --blue:#0f2634;
    --green: rgba(170,240,193);
    --dark-green:#3eb489;}
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        body{
              background-image: url("https://e0.pxfuel.com/wallpapers/468/85/desktop-wallpaper-pastel-mint-green-background-aesthetic-aesthetic-leaves.jpg");
    background-size: cover;
        }
         .form-group{
      margin: 20px auto;
      width: 300px;
    }
    .form-group:last-child{
      margin-top: 35px;
      display: flex;
      justify-content: space-between;
    }
    .form-group label{
    font-weight: 400; 
    font-size: 18px;
    color: var(--blue);
    }
  .form-control{
    width: 300px;
    height: 40px;
    color: var(--blue);
    font-size: 16px;
    border-radius: 15px;
    border: 1px solid var(--blue);
  }
  .form-control::placeholder{
    color: var(--blue);

  }
  .form-control:focus{
    color: var(--blue);
    box-shadow: rgba(170,240,193, 0.12) 0px 2px 4px 0px, rgba(170,240,193, 0.32) 0px 2px 16px 0px;
         border: 1px solid var(--blue);
  }
 .btn{
   background-color: var(--green);
   color: var(--blue);  
   padding:10px 35px;
   border-radius: 20px ;
   border:1px solid var(--blue);
   transition: .1s;
  }
  .btn:hover{
     background-color: var(--dark-green);
    color:var(--blue);
  }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5" style="color:var(--blue)">Create Record</h2>
                    <form action="createPHP.php" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" name="middlename" class="form-control" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="surname" class="form-control" value="">
                            <span class="invalid-feedback"></span>
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <a href="search.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>