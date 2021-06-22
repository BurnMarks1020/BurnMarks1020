<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
    <head>
    <title></title>
         <link href="https://fonts.googleapis.com/css?family=Concert+One|Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <style>
       *{
            box-sizing: border-box;
        }
        body{
            font-family: sans-serif;
            /*border: 1px solid black;*/
            padding: none;
            margin: auto;
        }
        #topBar{
            height: 150px;
            width: 1423px;;
           /* padding: 5px;*/
            /*border: 1px solid black;*/
            background-image: url("images/website%20header%20background.jpg");
            
        }
        #logo{
            float: left;
            display: block;
            width: 140px;
            height: 150px;
            margin-left: 30px;
            margin-right: 30px;
        }
        p{
            padding-top: 5px;
            padding-left: 50px;
            font-size: 1.5em;
            margin: auto;
            cursor: default;
        }
        header{
            float: left;
            display: block;
            width: 400px;
            height: 100px;
            /*border: 1px solid black;*/
            font-family: 'Concert One', cursive;
            font-size: 3em;
            line-height: 40px;
            text-align: center;
            margin-top: 39px;
            margin-left: 40px;
            
        }
        h1{
            padding-top: 25px;
            padding-left: 50px;
            font-size: 1.5em;
            margin: auto;
            font-family: 'Concert One', cursive;
            cursor: default;
        }
        nav{
            float: left;
            width: 550px;
            display: inline-block;
            height: 50px;
            text-align: center;
            margin-top: 60px;
            margin-left: 100px;
            margin-right: 50px;
           /* border: 1px solid black;*/
        }
        nav a:link{
            color:black;
        }
        nav a:hover{
            color: yellow;
        }
        a{
            margin-left: 13px;
            margin-right: 13px;
            font-size: 1.5em;
            text-decoration: none;
            /*font-family: 'Press Start 2p', cursive;*/
            font-family: 'Concert One', cursive;
        }
        main{
            display: block;
            /*float: left;*/
            height: 579px;
            width: 1423px;
           /* padding-left: 10px;*/
            background-image: url(images/body%20baackground.jpg);
            background-size: 1423px 726px;
            padding-top: 90px;
            padding-left: 50px;
        }
        #messagebox{
            float: left;
            width: 60%;
            margin-left: 25px;
            margin-right: 25px;
            height: 450px;
        }
        h2{
            padding-left: 5px;
            padding-right: 5px;
            margin: auto;
            font-size: 2.5em;
            font-family: 'Concert One', cursive;
            cursor: default;
        }
        h3{
            padding-left: 5px;
            padding-right: 5px;
            margin: auto;
            font-size: 4em;
            font-family: 'Concert One', cursive;
            text-align: center;
            color: yellow;
            text-shadow: black 5px 5px 5px;
            cursor: default;
        }
        input { 
            display: block;
            margin-bottom: 1em;
        }
        label { 
            float: left;
            width: 5em;
		    padding-right: 1em;
            text-align: right;
        }
    </style>
    <body>
    <div id="topBar">
        <div id="logo">
           <a href="home.php"><img src="images/Logo_redesign.png" height="140" width="140" class="center"></a> 
        </div>
        <header>
            <img src="images/website%20name.png" height="65" width="400px">
        </header>
        <nav>
           <a href="about.php">About</a>
            <a href="projects.php">Projects</a>
            <a href="contact.html">Contact</a>
            <a href="resume.php">Resume</a>
            <a href="logout.php">Sign out</a>
        </nav>
        </div>
    <main>
        <div id="messagebox">
            <!--<h3>There will be a message box here soon to send questions or comments to the developer. For now, use the contact information provided.</h3>-->
            <!--<form method="post" action="contact.php">
                <label for="name">Name:</label>
                <input type="text" name="name" id="nameID">
                <label for="email">Email:</label>
                <input type="text" name="email" id="emailID">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phoneID">
                <label for="message">Message:</label>
                <input type="text" name="message" id="messageID">
                <input type="submit" value="Submit" id="submit">
            </form>--> 
            <br><br><br><br><br><br>
            <h3>Message sent successfully!</h3>
        </div>
        <h2>Contact Info:</h2>
        <h1>Address:</h1>
            <p>356 Spring Lake Ct.</p>
            <p>Louisville, KY 40229</p>
        <h1>Phone:</h1>
            <p>(502)-592-3535</p>
        <h1>Email:</h1>
            <p>marksj8@nku.edu</p>
    </main>
    </body>
</html>
<?php
        $db_name = "burnmarks356_websiteInfo";
        $db_user = "burnmarks356";
        $db_pass = "";
        $db_host = "localhost";
        /*$name = "";
        $email ="";
        $phone = "";
        $message = "";*/
        
        $conn = mysqli_connect($db_host, $db_user, "ZyyANee\$DVWqYw", $db_name);
        if (!$conn) {
            die('Could not connect: '.$db_name.': ');   
        }   
      /*if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){ */ 
       /* if (!empty($_POST)){*/
        $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
        $message = mysqli_real_escape_string($conn, $_REQUEST['message']);
        
        $sql = "INSERT INTO contact_info (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
        $insert = $conn->query($sql);
        
       /* if (mysqli_query($conn, $sql)){
            echo "Successfully added.";
        }
        else {
            die("Error: could not execute $sql. " .mysqli_error($conn));
        }*/
        
       /* }*/
    /*}*/
        $conn->close();
?>