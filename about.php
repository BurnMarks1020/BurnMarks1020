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
            background-color: lightblue;
        }
        #topBar{
            height: 150px;
            width: 100%;;
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
            padding-top: 35px;
            padding-left: 10px;
            margin: auto;
            /*padding-left: 10px;*/
            /*font-size: 1.5em;*/
            margin-right: 30px;
            font-family: 'Concert One', cursive;
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
            padding-left: 10px;
            font-size: 2em;
            /*font-family: 'Concert One', cursive;*/
            margin: auto;
        }
        h2{
            margin: auto;
            padding-top: 40px;
            /*padding-left: 10px;*/
            /*font-size: 1.5em;*/
            font-family: 'Concert One', cursive;
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
            margin-left: 12%;
            margin-right: 12%;
            /*float: left;*/
            height: 79.3%;
            width: 75%;
           /* padding-left: 10px;*/
            background-image: url(images/self_pic2.jpg);
            background-size: 100% 100%;
            opacity: .8;
        }
        #description_box{
            float: right;
            height: 100%;
            width: 50%;
            overflow: auto;
            color: azure;
            background-color: black;
            opacity: .7;
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
        <div id="description_box"> 
        <p>When Jonah Marks attended elementary school, he was an introvert. He always kept to himself, barely spoke to anyone outside of class, and always had trouble fitting in. Having been diagnosed with ADD and anxiety, social activities were as hard as performing heart surgery, and were just as stressful. Jonah only spoke when spoken too and never hung out with friends from school or participated in extracurricular activities. He thought he would never learn to fit in socially.</p>
        <p>One day Jonah's father purchased a PlayStation. It was unlike anything Jonah had seen before. It was his first glance into the world-wide phenomenon known as <q>videogames.</q> When Jonah first watched his father play, he thought it was the most incredible thing in the world. It was a machine that could generate an entire world where you could control and manipulate characters and environments. The first game Jonah ever played was called <q>Pacman World,</q> an early 3D platforming game where Pacman is trying to save his family by exploring worlds and solving puzzles. His Father also had other early role-playing games that made him more engrossed in the experience. Playing these games was a fun diversion for Jonah after homework and piqued his intellectual curiosity. </p>
        <p>Perhaps he liked the games so much because it was just another way he could escape for a while and unwind. The different colors of the environments, the catchy music and the way the characters moved when he pressed a button interested him. Furthermore, the need to complete just one more level would keep Jonah coming back. I knew I was different from everyone else because I couldn&#39;t handle the real world sometimes. He just needed to get away for a while to a place where he could be more in control.</p>
        <p>As Jonah grew older, the games became more high-tech, with better graphics, game play, and user-interfaces. At the same time, counseling, coping mechanisms, and medication helped him deal with his stress. Videogames started becoming less of an escape and more of a pastime. He began to wonder what it would be like to actually create one of these videogames. It excited him to think about bringing an idea, a whole world, to life and interact with it from the outside. If Jonah could do that, then perhaps others with ADD or anxiety could be able to adjust to social life the way he did. His artistic skills, imagination and desire to learn could help him bring such a dream to reality. </p>
        <p>When Jonah first told his father that he was interested in programming videogames, his father gave him a book he used in high school to learn BASIC programming. Although it was outdated, the principles and rules in that book gave Jonah his first taste of coding. Since computer programming would be key to his career aspirations, Jonah dove right into it. He hoped to further his knowledge of computers as he continued his studies in high school and college.</p>
        <p>That first day with the PlayStation may become the most important day in Jonah's career. Seeing those images on the screen was like something out of a science-fiction movie. Ever since he started dreaming about becoming a game developer, Jonah has worked hard to keep up his studies and conduct research on potential careers. He already has a few ideas for potential projects. What started as an escape from his reality, may lead to a life where he creates new realities.</p>
        </div>
    </main>
    </body>
</html>