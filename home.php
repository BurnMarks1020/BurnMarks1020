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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Concert+One|Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            font-family: sans-serif;
            /*border: 1px solid black;*/
            /*overflow: auto;*/
            height: 100%;
            width: 1423px;
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
            padding-top: 25px;
            padding-left: 10px;
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
            padding-left: 10px;
            font-size: 2em;
            /*font-family: 'Concert One', cursive;*/
            margin: auto;
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
            margin-left: 15px;
            margin-right: 15px;
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
        }
        .myslides{
            display: none;
            /*background-color: aqua;*/
            width: 1423px;
            height: 579px;
        }
    </style>
    <body>
    <div id="topBar">
        <div id="logo">
           <a href="home.php"><img src="images/Logo_redesign.png" height="140" width="140" class="center"></a> 
        </div>
        <header>
            <!--J. MARKS DESIGNS-->
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
    <!--<h2>This is the main page (slideshow on home page to be implemented)</h2>-->
        <div class="myslides w3-animate-right">
            <img src="images/slide1.jpg" height="579px" width="1423px">
        </div>
        <div class="myslides w3-animate-right" height="100%" width="100%">
            <img src="images/slide2.jpg" height="579px" width="1423px">
        </div>
        <div class="myslides w3-animate-right">
            <img src="images/slide3.jpg" height="579px" width="1423px">
        </div>
    </main>
        <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 10000); // Change image every 2 seconds
        }
        </script>
    </body>
</html>


