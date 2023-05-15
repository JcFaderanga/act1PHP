<?php
// Include config file
require_once "connections.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["firstname"]);
    if(empty($input_name)){
        $name_err = "Please enter a name."; 
    } else{
        $name = $input_name;
    }
    // Validate middlename
    $input_address = trim($_POST["middlename"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    // Validate salary
    $input_salary = trim($_POST["surname"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    }else{
        $salary = $input_salary;
    }
    
    
    
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an update statement
        $sql = "UPDATE crud SET firstname=?, middlename=?, surname=? WHERE id=?";
         
        if($stmt = mysqli_prepare($connections, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_salary, $param_address,  $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: search.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($connections);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM crud WHERE id = ?";
        if($stmt = mysqli_prepare($connections, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["firstname"];
                    $address = $row["middlename"];
                    $salary = $row["surname"];
                    
                    
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        body{
        background: #121212;
        }
        nav{
        height: 60px;
        width: 100%;
        border-bottom: 1px solid yellow;
        background: #121212;
        color: yellow;
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
    .form-control:hover{
    color: yellow;
  }
  .form-group{
      
    }
    .form-group:last-child{
     
    }
    .form-group label{
    font-weight: 400; 
    color: white;
    }
  .form-control{
    background: #121212;
    color: white;
    font-size: 16px;
    border: 1px solid yellow;
  }
  .form-control:focus{
    box-shadow: rgba(255, 255, 0, 0.12) 0px 2px 4px 0px, rgba(255, 255, 0, 0.32) 0px 2px 16px 0px;
    border: 1px solid yellow;
    background: transparent;
    color: white;
  }
  .btn{
   background-color: yellow;
   color:black;  
   font-weight: 500;
   border: 1px solid yellow;
  }
  .btn:hover{
    background: yellow;
    color: black;
  }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: white;" class="mt-5">Update Record</h2>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Middle name</label>
                            <input type="text" name="middlename" class="form-control" value="<?php echo $address; ?>">
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="surname" class="form-control" value="<?php echo $salary; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err;?></span>
                        </div>
                        
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="search.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>