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
                <li><a href="Homepage.php">Log Out</a></li>


            </ul>
        </nav>
    </header>

    <main>
        <h1 style = "margin-left: 45%;">ORDER INFO</h1><br>
        
<table>
    <tr style="background: rgba(39, 72, 102, .95);color:white;">
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Item</th>
        <th>Address</th>
        <th>Date</th>
    </tr>

    <?php
    $con = mysqli_connect("localhost", "root", "", "hostel");
    $sql = mysqli_query($con, "SELECT * FROM `order`");

    
    if (mysqli_num_rows($sql) > 0) {
        
        while ($row = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['item'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No records found</td></tr>";
    }
    ?>
    </table>
    </main>

    <footer>
        <p>&copy; Robertson - All Rights Reserved</p>
    </footer>
</body>
</html>