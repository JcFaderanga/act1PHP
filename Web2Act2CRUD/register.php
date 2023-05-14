
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
header("location: login2.php");
$success = "<p style='color:green;'>Successfully Inserted data into the database!</p>";
}

/*
// Include config file
include_once("connections.php");
 
// Define variables and initialize with empty values
$username = $password = $firstname = $surname =$address = "";
$username_err = $password_err = $firstname_err = $surname_err = $address_err = "";


$page_err = ""; 
if (isset($_POST['submit'])) {
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate username
    $input_username = trim($_POST["username"]);
    if(empty($input_username)){
        $username_err = "Please enter correct username.";     
    } else{
        $username= $input_username;
    }
    // Validate password
    $input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please enter correct password.";     
    } else{
        $password = $input_password;
    }
    // Validate firstname
    $input_firstname = trim($_POST["firstname"]);
    if(empty($input_firstname)){
        $firstname_err = "Please enter a name.";
    } elseif(!filter_var($input_firstname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $firstname_err = "Please enter a valid name.";
    } else{
        $firstname = $input_firstname;
    }
    // Validate surname
    $input_surname = trim($_POST["surname"]);
    if(empty($input_surname)){
        $surname_err = "Please enter an surname.";     
    } else{
        $surname = $input_surname;
    }

    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }

    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($firstname_err) && empty($surname_err) && empty($address_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO tbl_informations(username,password,firstname,surname,address) VALUES (?, ?, ?, ?, ?)";
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssss", $param_username, $param_password, $param_firstname, $param_surname, $param_address);
            // Set parameters
            $param_username = $username;
            $param_password = $password;
            $param_firstname = $firstname;
            $param_surname = $surname;
            $param_address = $address;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                $page_err = "<p style='color:green;'>Successfully Inserted data into the database!</p>";
            } else{
                $page_err = "<p style='color:red;'>Oops! Error Inserting data into the database!</p>";
            }
        }
        // Close statement
        $stmt->close();
    }
        // Close connection
    $mysqli->close();
}
header("location: login2.php");
}
*/
?>



