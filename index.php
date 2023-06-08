<?php
$db = mysqli_connect("localhost","root","","myportfolio");

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
    <script src="script.js"></script>
    <title>Bio</title>
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

    <div class="main">
        <div class="image">
            <img src="./images/olive1.jpg" alt="my picture" id="pic">
        </div>
        <div class="intro">
            <button id="start" onclick="stop();">Stop Slideshow</button>
            <h2>Introduction</h2> <br>
            <hr>
            <h4>Bio</h4>
            <p>My name is Olive Nakhaonga. I'm currently studying ICT at Mzuzu University.<br> 
                I have done and practised some programming languages<br>
                 in the past 2 years like C and JAVA, i also do graphic design<br>
                 and web development, and i am a parttime manicurist and pedicurist.
            </p>
            <hr>
            <h4>Skills And Experiences</h4>
            <p>
                I do web Designing, graphic designing, i've done C and JAVA, and i
                do manicures and pedicures to pass time.
            </p>
        </div>
        <div class="form">
            <h1>Form</h1>
            <form action="" id="form">
                <table>
                    <tr>
                        <td><label for="name" id="fname">First Name:</label></td>
                        <td><input type="text" name="name" placeholder="Enter text here"></td>
                    </tr>
                    <tr>
                        <td><label for="sname" id="sname">Surname:</label></td>
                        <td><input type="text" name="sname"></td>
                    </tr>
                    <tr>
                        <td><label for="uname" id="uname">Username:</label></td>
                        <td><input type="text" name="uname"></td>
                    </tr>
                    <tr>
                        <td><label for="phone" id="phone">Phone number:</label></td>
                        <td><input type="tel" name="phone"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="submit">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <footer>
        <h5>Contacts:</h5>
        <img src="#" alt="" class="contact"> Phone: <?php echo $contactdetails[0][2]?><br>
        <img src="#" alt="" class="contact"> WhatsApp:  <?php echo $contactdetails[2][2]?><br>
        <img src="#" alt="" class="contact"> Email: <?php echo $contactdetails[3][2]?> <br>
        <img src="#" alt="" class="contact"> Instagram: <?php echo $contactdetails[1][2]?>
    </footer>
</body>
</html>