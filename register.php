<?php
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
$confirm_password = "";
$username_err = "";
$password_err = "";
$confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT user_id FROM user_info WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql2 = "INSERT INTO user_info (username, password, signup_date) VALUES (?, ?, CURRENT_TIMESTAMP)";
        
        if($stmt2 = mysqli_prepare($link, $sql2)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt2, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
          /*  $result = mysqli_stmt_execute($stmt2);*/
            if(mysqli_stmt_execute($stmt2)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt2);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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
            padding: 10px 10px 20px 20px;
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
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>