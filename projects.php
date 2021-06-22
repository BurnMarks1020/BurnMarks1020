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
         <link href="https://fonts.googleapis.com/css?family=Concert+One|Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <style>
        *{
            box-sizing: border-box;
        }
       body{
            font-family: sans-serif;
            /*border: 1px solid black;*/
            overflow: auto;
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
        nav a{
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
            height: 933px;
            width: 1423px;
           /* padding-left: 10px;*/
            background-image: url(images/body%20baackground.jpg);
            background-size: 1423px 100%;
        }
        .project{
            display: block;
            float: left;
            height: 300px;
            width: 650px;
            margin-left: 25px;
            /*margin-right: 25px;*/
            margin-top: 5px;
            margin-bottom: 5px;
            box-shadow: 5px 5px 5px black;
            font-family: 'Concert One', cursive;
        }
         .row::after {
            clear: both;
            display: table;
            margin: auto; 
        }
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 220px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

        /* Position the tooltip */
            position: absolute;
            z-index: 1;
            opacity: 0;
            transition: opacity 1s;
            right: 1%;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
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
        <div class="row">
            <a href="Cloud9%20website%20redisgn.pdf" target="_blank"><div class="project">
                <div class="tooltip"><img src="images/cloud9_redesign.jpg" height="300px" width="650px" border="0"><span class="tooltiptext">As a project for one of my college classes, I was tasked with creating a conceptual redesign of a website of my choosing. The site itself gave me little to work with, so the design is very simplistic and easy to read.</span></div>
            </div></a>
            <a href="images/crate%20texture%20full.jpg" target="_blank"><div class="project">
                <div class="tooltip"><img src="images/crate%20texture.jpg" height="300px" width="650px"><span class="tooltiptext">This is a crate texture design example for a 3D model. The different details on each side are meant to give backstory to the world this crate could be found in, such as a video game or 3D animation.</span></div>
            </div></a>
        </div>
        <div class="row">
            <a href="webpage_icons.pdf" target="_blank"><div class="project">
                <div class="tooltip"><img src="images/webpage%20icons.jpg" height="300px" width="650px"><span class="tooltiptext">Most websites have their own unique button icons. These exampels include the icons before a after a user clicks on them.</span></div>
            </div></a>
            <a href="jobs.html" target="_blank"><div class="project">
                <div class="tooltip"><img src="images/Steidle%20Fabrication%20page.jpg" height="300px" width="650px"><span class="tooltiptext">During my Junior year of college, a class project required different groups of students to create a website. My group decided to build a site for one of our members' uncle's metal fabrication shop. The logo and name design were created by the particular member. This page is the one I worked on.</span></div>
            </div></a>
        </div>
        <div class="row">
            <a href="ConceptArt.pdf" target="_blank"><div class="project">
                <div class="tooltip"><img src="images/ConceptArt.jpg" height="300px" width="650px"><span class="tooltiptext">This is concept art for a VR game meant to help those who suffer from social anxiety. The game provides a safe environment to practice social interaction without the stress of actual conversation.</span></div>
            </div></a>
            <a href="images/HoHoCoHo%20flyer.jpg" target="_blank"><div class="project">
                <div class="tooltip"><img src="images/HoHoCoHo%20flyer.jpg" height="300px" width="650px"><span class="tooltiptext">This is a poster design for a special event hosted by the Honors Student Association at Northern Kentucky University.</span></div>
            </div></a>
        </div>
    </main>
    </body>
</html>