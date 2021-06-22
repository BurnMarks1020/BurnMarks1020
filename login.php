<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}
//    $db_name = "burnmarks356_websiteInfo";
//    $db_user = "burnmarks356";
//    $db_pass = "";
//    $db_host = "localhost";
//        
//    $link = mysqli_connect($db_host, $db_user, "ZyyANee\$DVWqYw", $db_name);
//        if (!$link) {
//            die('Could not connect: '.$db_name.': ');   
//        } 
require('config.php');
// Define variables and initialize with empty values
$username = "";
$password = "";
$username_err = ""; 
$password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, username, password FROM user_info WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: home.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
        }
       body{
           position: absolute;
            font-family: sans-serif;
            /*border: 1px solid black;*/
            overflow: auto;
            height: 100%;
            width: 100%;
            margin: auto;
            display: inline-block;
        }
        .wrapper{
            display: block;
            position: absolute;
            /*float: left;*/
            height: 100%;
            width: 100%;
           /* padding-left: 10px;*/
            background-image: url(images/body%20baackground.jpg);
            background-size: 100% 100%;
        }
        form {
            margin-left: 40%;
            margin-right: 40%;
        }
        h2{
            margin-top: 10%;
            margin-left: 40%;
            margin-right: 40%;
            margin-bottom: 1%;
            font-family: 'Concert One', cursive;
            font-size: 3.5em;
            color: yellow;
            text-shadow: black 5px 5px 5px;
        }
        p{
            margin-left: 40%;
            margin-right: 40%;
            font-family: 'Concert One', cursive;
            cursor: default;
        }
        form{
            background-color: hsla(210, 90%, 65%, 0.5);
            border-radius: 5px;
            padding: 10px;
        }
        form p{
            margin: auto;
            cursor: default;
        }
        label{
            font-family: 'Concert One', cursive;
            cursor: default;
        }
        input{
            margin-bottom: 5%;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <!--<p>Please fill in your credentials to login.</p>-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
            <p>Login as a <a href="home.html"> Guest </a>.</p> 
        </form>
    </div>    
</body>
</html>