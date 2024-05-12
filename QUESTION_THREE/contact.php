<?php
$con = mysqli_connect("localhost","root","","hostel");
if (isset($_POST['send'])) {
    try{
    $A = $_POST['fullname'];
    $B = $_POST['email'];
    $C = $_POST['phone'];
    $D = $_POST['location'];
    $E = $_POST['message'];

    $sql = "INSERT INTO `contacts`(`fullname`, `email`, `phone`, `location`, `message`) VALUES ('$A','$B','$C','$D','$E')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('message sent successfully');window.location='contact.php';</script>";
    } else {
        echo "<script>alert('ERROR');window.location='contact.php';</script>";
    }
    }
    catch(Exception $e){
        echo $e;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's get in Touch !</title>
    <link rel="stylesheet" href="mycss.css">
</head>
<body>
    <header>
        
        <nav>
            <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="contact">
            <h1>Contact Us</h1>
            <form action="contact.php" method="POST">
            <center>
            <table cellspacing="10">
                <tr>
                    <td><label for="fullname">Full Name:</label></td>
                    <td><input type="text" id="name" name="fullname" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone:</label></td>
                    <td><input type="text" id="phone" name="phone" required></td>
                </tr>
                <tr>
                    <td><label for="location">Location:</label></td>
                    <td><input type="text" id="location" name="location" required></td>
                </tr>
                <tr>
                    <td><label for="message">Message:</label></td>
                    <td><textarea name="message" id="message" rows="4"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="send" value="SEND" style="width: 100%; padding: 10px;background: rgba(39, 72, 102, .95); color: white; border: none;"></td>
                </tr>
            </table>
            </center>
        </form>
        </section>
    </main>

    <footer>
        <p>&copy; Robertson - All Rights Reserved</p>
    </footer>
</body>
</html>