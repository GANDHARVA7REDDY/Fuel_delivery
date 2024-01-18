<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Establish a database connection (you'll need to replace these with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fuel_data";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data (replace with your actual query)
$sql = "SELECT * FROM fuel_table";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        header{
            background-color: #333;
        }
        header h3{
            font-size: 36px;
            color:#ff6600
        }
      body{
        background-image:url("/Users/sribharathikarri/Desktop/Screenshot 2023-09-28 at 8.08.23 PM.png");
        background-size:150px,100px;

      }
    </style>
</head>
<header>
    <center><h3>BOOKING DATA</h3></center>
    </header>
<body>
    <section class="data-display">
        <h2>Bookings Now</h2>
        <table>
            <thead>
                <tr>
                    <th>Fuel Type</th>
                    <th>Delivery Address</th>
                    <th>Quantity (liters)</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display data retrieved from the database
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["fuel_type"] . "</td>";
                        echo "<td>" . $row["delivery_address"] . "</td>";
                        echo "<td>" . $row["quantity"] . "</td>";
                        echo "<td>" . $row["price"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>
