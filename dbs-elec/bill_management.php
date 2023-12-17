<?php
include('db_connection.php.php'); // Include your database connection code

// Fetch billing data from the database
$sql = "SELECT * FROM billing";
$result = $conn->query($sql);

// Check for errors in the query
if (!$result) {
    die("Error fetching billing information: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Management - EBMS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="signin.php">Login</a></li>
            <a href="bill_management.php">Electricity Bill Management</a>
        </ul>
    </nav>

    <div class="container">
        <h2>Billing Information</h2>

        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Meter Number</th>
                        <th>Account ID</th>
                        <th>Customer ID</th>
                        <th>Monthly Units</th>
                        <th>Amount per Unit</th>
                        <th>Total Amount</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['meter_number'] . "</td>
                        <td>" . $row['acc_id'] . "</td>
                        <td>" . $row['cust_id'] . "</td>
                        <td>" . $row['monthly_units'] . "</td>
                        <td>" . $row['amount_per_unit'] . "</td>
                        <td>" . $row['total_amount'] . "</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "No billing information available.";
        }
        ?>
    </div>

    <!-- Additional Content Div -->
    <div class="additional-content">
        <h3>Additional Content Goes Here</h3>
        <p>This is some additional content you want to include in your page.</p>
    </div>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
