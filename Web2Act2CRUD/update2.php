<?php
// Include config file
require_once "connections.php";
 
// Define variables and initialize with empty values
$username = $password = $firstname = $surname =$address = "";
$username_err = $password_err = $firstname_err = $surname_err = $address_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate username
    $input_username = trim($_POST["username"]);
    if(empty($input_name)){
        $username_err = "Please enter a username.";
    } else{
        $username = $input_username ;
    }

    // Validate password
    $input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please enter a password.";
    } else{
        $password = $input_password ;
    }

    // Validate firstname
    $input_firstname = trim($_POST["firstname"]);
    if(empty($input_firstname)){
        $firstname_err = "Please enter a firstname.";
    } else{
        $firstname = $input_firstname ;
    }

    // Validate surname
    $input_surname = trim($_POST["surname"]);
    if(empty($input_surname)){
        $surname_err = "Please enter a surname.";
    } else{
        $surname = $input_surname ;
    }

    // Validate address address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($firstname_err && empty($surname_err) && empty($address_err){
        // Prepare an update statement
        $sql = "UPDATE tbl_informations SET username=?, password=?, firstname=?, surname=?, address=? WHERE id=?";
         
        if($stmt = mysqli_prepare($connections, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_username, $param_firstname, $param_surname, $param_address, $param_id);
            
            // Set parameters
            $param_username = $username;
            $param_password = $password;
            $param_firstname = $firstname;
            $param_surname = $surname;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
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
        $sql = "SELECT * FROM tbl_informations WHERE id = ?";
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
                    $username = $row["username"];
                    $password = $row["password"];
                    $firstname = $row["firstname"];
                    $surname = $row["surname"];
                    $address = $row["address"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: login2.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($connections);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: login2.php");
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
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>">
                            <span class="invalid-feedback"><?php echo $firstname_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="surname" class="form-control <?php echo (!empty($surname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $surname; ?>">
                            <span class="invalid-feedback"><?php echo $surname_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>