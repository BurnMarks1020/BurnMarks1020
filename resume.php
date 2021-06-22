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
        p{
            margin: auto;
            font-size: 1.2em;
            font-family: 'Concert One', cursive;
            cursor: default;
        }
        h1{
            margin: auto;
            padding-top: 35px;
            padding-left: 10px;
            font-size: 2em;
            font-family: 'Concert One', cursive;
            cursor: default;
        }
        h2{
            margin: auto;
            padding-top: 40px;
            /*padding-left: 10px;*/
            /*font-size: 1.5em;*/
            font-family: 'Concert One', cursive;
            cursor: default;
        }
        ul{
            font-family: 'Concert One', cursive;
            cursor: default;
        }
        li{
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
        }
        #resume{
            height: 500px;
            width: 1423px;
        }
        .column{
            float: left;
            height: 200px;
            width: 500px;
            margin-top: auto;
            margin-left: 100px;
        }
        .row::after {
            clear: both;
            display: table;
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
        <div id="resume">
        <div class="row">
            <div class="column"><h1>Work Experience</h1></div>
            <div class="column">
                <h2>Bob Evans Resturant &nbsp; 2014-2017</h2>
                    <p style="font-style: italic">Host</p>
                <ul>
                    <li>Escorted customers to their table</li>
                    <li>Other duties:
                        <ul>
                        <li>Cashier, Counter Sales, Cleaning, as directed by manager</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
         <div class="row">
            <div class="column"><h1>Skills</h1></div>
            <div class="column">
                <h2>Languages:</h2><p>Java, HTML5, C, C++, Python, SQL</p>
                <h2>Creative:</h2><p>Photoshop, Illustrator, Web Page Design, Drawing</p>
                <h2>General:</h2><p>Organization, Diligence, Hands-on-learner, Open-minded, empathetic</p>
             </div>
        </div>
        </div>
       <!-- <p style="margin-left: 100px">download link</p>-->
        <a href="Resume_Marks.pdf" style="padding-left: 80px">View and Download Resume</a>
    </main>
    </body>
</html>