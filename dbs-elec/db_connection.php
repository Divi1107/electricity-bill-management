<?php
$host = "localhost";
$username = "root";
$password = "divya";  // No password by default
$database = "ELECTRICITY";
$connection = mysqli_connect('localhost', 'root', 'divya', 'ELECTRICITY');
// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

//  the connection is successful
echo "Connected successfully";

// Close the connection when you're done with it
mysqli_close($connection);
?>
