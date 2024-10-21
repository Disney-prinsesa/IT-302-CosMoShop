<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Capture form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];  // User-provided password

    // Database connection variables
    $servername = "127.0.0.1";  // Localhost for XAMPP
    $dbUsername = "root";       // Default username for XAMPP
    $dbPassword = "";           // Default password for XAMPP (no password)
    $dbname = "comshop";        // Your database name

    // Create a MySQL connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use a prepared statement to check if the email is already registered
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<div class='error-message'>This email is already registered. Please try another.</div>";
    } else {
        // Hash the user-provided password before saving
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Use a prepared statement to insert the user into the database
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

        if ($stmt->execute()) {
            // Output a success message and redirect after 2 seconds
            echo "<div class='success-message'>Account successfully created! Redirecting to login page...</div>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'Login.php';
                    }, 2000);
                  </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
