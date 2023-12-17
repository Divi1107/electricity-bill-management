<?php
// Include database connection code 
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process registration form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Add code to insert user data into the database
    // For simplicity, you can display a success message or redirect to another page.
    echo "Registration Successful!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="container">
        <h2> User Registration</h2>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <button type="submit">Register</button>
        </form>
        <a href="signin.php">To Login page</a>
    </div>
</body>
</html>
