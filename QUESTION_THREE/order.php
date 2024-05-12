<?php
$con = mysqli_connect("localhost","root","","hostel");
if (isset($_POST['send'])) {
    $A = $_POST['fullname'];
    $B = $_POST['email'];
    $C = $_POST['phone'];
    $D = $_POST['item'];
    $E = $_POST['address'];
    $F = $_POST['date'];

    $sql = "INSERT INTO `order`(`fullname`, `email`, `phone`, `item`, `address`, `date`) VALUES ('$A','$B','$C','$D','$E','$F')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('New record created successfully');</script>";
        header("Location:order.php");
    } else {
        echo "<script>alert('ERROR');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
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
    <h1 style ="margin-left:45%;">Order Form</h1>
        <form action="order.php" method="POST">
            <center>
            <table cellspacing="10" style = "width:100px;">
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
                    <td><label for="item">Select Item:</label></td>
                    <td><select id="item" name="item">
                            <option value=""></option>
                            <option value="Grilled Salmon">Grilled Salmon</option>
                            <option value="Classic Mojito">Classic Mojito</option>
                            <option value="Orange Delight">Orange Delight</option>
                            
                        </select></td>
                </tr>
                <tr>
                    <td><label for="Address">Address:</label></td>
                    <td><input type="text" id="address" name="address" required></td>
                </tr>
                <tr>
                    <td><label for="date">Date:</label></td>
                    <td><input type="date" id="date" name="date" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="send" value="PLACE ORDER" style="width: 100%; padding: 10px;background: rgba(39, 72, 102, .95); color: white; border: none;"></td>
                </tr>
            </table>
            </center>
        </form>
    </main>

    <footer>
        <p>&copy; Robertson - All Rights Reserved</p>
    </footer>
</body>
</html>