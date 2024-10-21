<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="shortcut icon" type="x-icon" href="images/logofinal.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

            <?php
                // Check if session is not started, then start the session
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }

            // Initialize variables for errors and input values
            $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
            $emailInput = isset($_SESSION['email_input']) ? $_SESSION['email_input'] : "";

            // Clear session variables after displaying errors
            unset($_SESSION['errors']);
            unset($_SESSION['email_input']);
            ?>

<div class="navbar">
    <div class="logo">
        <img src="images/logofinal.png" class="logo-img">
    </div>
    <a href="BarolaCamilleindex.html">Home</a>
        <a href="BarolaCamilleindex.html">About</a>
        
        <div class="dropdown">
            <button class="dropbtn">Products</button>
            <div class="dropdown-content">
                <a href="countour.html">Contour</a>
                <a href="mascara.html">Mascara</a>
                <a href="foundation.html">Foundation</a>
                <a href="lipstick.html">Lipstick</a>
            </div>
        </div>
        
        <a href="Login.php" class="dropbtn">Log In</a>
        <a href="Signup.php" class="dropbtn">Sign Up</a>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=61563850221131" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/xa_mi_lla/" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/Disney-prinsesa/coms" title="GitHub"><i class="fab fa-github"></i></a>
        </div>
    </div>

<div id="loginModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Login</h2>
        </div>
        <div class="modal-body">
            <!-- Display errors if they exist -->
            <?php if (!empty($errors)) : ?>
                <?php foreach ($errors as $error) : ?>
                    <p class='error'><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="check_login.php" method="POST">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($emailInput); ?>" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required>

                <button type="submit">Login</button>
            </form>
        </div>
        <span class="icon">
            <a href="https://www.facebook.com/profile.php?id=61563850221131" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/xa_mi_lla/" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/Disney-prinsesa/coms" title="GitHub"><i class="fab fa-github"></i></a>
        </span>
        <a class="forgotpassword" href="Signup.php">Forgot Password</a>
    </div>
</div>

</body>
</html>
