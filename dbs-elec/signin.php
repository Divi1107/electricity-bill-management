<?php
// Include database connection code 
include('db_connection.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process login form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Add code to validate user credentials from the database
    // For simplicity, you can display a success message or redirect to another page.
    echo "Login Successful!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EBMS</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
    <a href="bill_management.php" target="blank">Electricity Bill</a>
</body>
</html>
