<?php
// Check if session is not started, then start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize an array to hold errors
$errors = [];

// Database connection variables
$servername = "127.0.0.1";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (no password)
$dbname = "comshop"; // Ensure this is the correct database name (check in phpMyAdmin)

// Create the MySQL connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check the connection to ensure it's working
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Only process the form submission when a POST request is made
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL Injection
    $email = $conn->real_escape_string($_POST['email']);
    $passwordInput = $conn->real_escape_string($_POST['password']);

    // Check if the math solution is correct
    if (!isset($_SESSION['math_answer']) || $_POST['math_solution'] != $_SESSION['math_answer']) {
        $errors[] = "Incorrect answer to the math problem.";
    }

    // Fetch the user from the `users` table using the provided email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user details
        $user = $result->fetch_assoc();

        // Check if the password matches (in a real application, you would hash the password)
        if ($user['password'] === $passwordInput) {
            // Successful login, set session variables for the user
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['success_login'] = "You have successfully logged in!";

            // Redirect to a homepage or user dashboard after successful login
            header("Location: BarolaCamilleindex.php"); // Change this to your dashboard or home page
            exit();
        } else {
            // Password is incorrect
            $errors[] = "Incorrect password. Please try again.";
        }
    } else {
        // No user found with the given email
        $errors[] = "No account found with that email. Please create an account.";
    }
}

// Close the database connection
$conn->close();

// Store the errors and input values in session
$_SESSION['errors'] = $errors;
$_SESSION['email_input'] = $email; // Store the entered email to retain in form

// Include the login page so the errors are displayed on the same page
include 'Login.php';
?>
