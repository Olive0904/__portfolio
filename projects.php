<?php
$db = mysqli_connect("localhost","root","","myportfolio");
$result = mysqli_query($db, "select * from `projects`");
$projects = mysqli_fetch_assoc($result);

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
    <title>Projects</title>
</head>
<body>
    <header>
        Olive Nakhaonga
        <nav>
            <a href="bio.php">Home</a> 
            <a href="projects.php">Projects</a>
            <a href="skills.php">Skills</a>
        </nav>
    </header>

    <div class="images">
        <img src="images/olive1.jpg"/>
        <img src="nails1.jpg"/>
        <a href="pictures.php">click to view more</a>

        

        <p>These are just some of the projects i've worked on so far, on the first <br>
            picture that is actually a picture i edited using photoshop, and the three <br>
            beautiful pictures are some of my client's hands that i have done.  </p>

            <?php
            
            ?>
    </div>

    <footer>
        <h5>Contacts:</h5>
        <img src="phone.png" alt="" class="contact"> Phone: +265 998 05 28 95 <br>
        <img src="Whatsapp.png" alt="" class="contact"> WhatsApp: +265 882 58 59 30 <br>
        <img src="gmail.png" alt="" class="contact"> Email: olivenakhaonga@gmail.com <br>
        <img src="ig.png" alt="" class="contact"> Instagram: whimsical_gurll_
    </footer>
</body>
</html>