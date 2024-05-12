<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
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
    <form action="report.php" method="POST">
            <center>
            <table cellspacing="10" style ="width:500px;margin-top:50px;">
                <tr>
                    <td><label for="fullname">User Name:</label></td>
                    <td><input type="text" id="name" name="fullname" required></td>
                </tr>
                <tr>
                    <td><label for="email">Password</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="login" value="LOGIN" style="width: 100%; padding: 10px;background: rgba(39, 72, 102, .95); color: white; border: none;">
                    </
                    <td>
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