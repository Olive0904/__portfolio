<?php
$db = mysqli_connect("localhost","root","","myportfolio");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Olive's Portfolio</title>
</head>
<body>
    <center> <h1>GET YOUR NAILS DONE HERE!</h1>
        <b><hr></b>
        <h2>PRICES</h2>
        <h3> Acrylic</h3>
            <p>natural nails = MK10,000.00 <br>
               artificial nails = MK8,000.00 <br>
               toe nails = MK5,000.00  
            </p>
        <h3>Gel</h3>
            <P>Natural nails = MK4,000.00 <br>
               Artificial nails = MK5,000.00 <br>
               Toenails = MK3,500.00 <br>
               cleaning nails = MK3,000.00  
            </P>
            <p><a href="pictures.php">Click here</a> to see others who got their nails done</p>
    </center>
</body>
</html>