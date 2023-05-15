<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        nav{
        height: 60px;
        width: 100%;
        border-bottom: 1px solid rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 30px;
    }
    nav span{
        font-size: 20px;
    }
    nav span li{
        text-decoration: none;
        list-style: none !important;
        display: default;
    }
    nav i{
        font-size: 40px;
        cursor: pointer;
        margin: 0 20px;
            }
    </style>
</head>
<body>
    <nav>
            <div class="left-side">
               <span>Dashboard</span>
            </div>
            <div class="right-side">
                
                <a href="index.html">Home</a>
            </div>
        </nav>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <form action="createPHP.php" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" value="">
                            
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="surname" class="form-control" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"></textarea>
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