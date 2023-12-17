<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('db_connection.php');
    $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user data from the database based on the entered username
    $sql = "SELECT user_id, username, password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verify the entered password against the stored hash
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables or redirect to the user's dashboard
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];

            // Redirect to the dashboard or another page
            header("Location: dashboard.php");
            exit();
        } else {
            // Incorrect password
            $error_message = "Incorrect password. Please try again.";
        }
    } else {
        // User not found
        $error_message = "User not found. Please check your username.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
