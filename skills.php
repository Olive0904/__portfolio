<?php
$db = mysqli_connect("localhost","root","","myportfolio");
$result = mysqli_query($db, "select * from `skills`");
$skills = mysqli_fetch_assoc($result);
$result = mysqli_query($db, "select * from `contactdetails`");
$contactdetails = mysqli_fetch_all($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Skills</title>
</head>
<body>
    <header>
        Olive Nakhaonga
        <nav>
            <a href="index.php">Home</a>
            <a href="projects.php">Projects</a>
            <a href="skills.php">Skills</a>
            
        </nav>
    </header>
    <div class = "progress">
        <div class="progress-bar"></div>
    </div>
    
    

    <footer>
        <h5>Contacts:</h5>
        <img src="#" alt="" class="contact"> Phone: +265 998 05 28 95 <br>
        <img src="#" alt="" class="contact"> WhatsApp: +265 882 58 59 30 <br>
        <img src="#" alt="" class="contact"> Email: olivenakhaonga@gmail.com <br>
        <img src="#" alt="" class="contact"> Instagram: whimsical_gurll_
    </footer>
    <!--<style>
        .progress{
            height: 14px;
            length: ;
            background-color: aliceblue;
            position: relative;
        }
        .progress-bar{
            position: static;
            background-color: #bd51f3;
            height: auto;
            animation: progress-animation 6s forwards;
        }
        @keyframes progress-animations {
            % {width}
        }
    </style>-->
</body>
</html>