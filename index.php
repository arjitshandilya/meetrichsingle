<?php
// Include database connection code here
include "includes/db.php";


// Placeholder for login logic (to be implemented)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $email = $_POST['email'];
    $password = $_POST['password'];

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Mature Dating</title>
    
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-c2ClxF3IOmO0+QVcpk2Uv+T7uwqs1nWvZ2eZ9aRnHnCyydCZKbl59b0eqpxUQ8FJ15rF2od5b1Chz0oHDXWrlg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >

<div class="container">
    <div class="login-box">
        <div class="logo-text">GSD</div>
        <h2>Welcome to Mature Dating</h2>
        <form action="login.php" method="POST">
            <div class="textbox">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="btn" id="landing-link">Login</button>
            
            <!-- Social Login Buttons -->
            <div class="social-login">
                <button type="button" class="btn1 google-btn">
                    <i class="fab fa-google"></i> G
                </button>
                <button type="button" class="btn1 facebook-btn">
                    <i class="fa fa-facebook"></i> F
                </button>
                <button type="button" class="btn1 apple-btn">
                    A
                </button>
            </div>
        </form>
        <a href="#" class="forgot-password">Forgot your password?</a>
        <a href="signup.php" class="signup-link">Don't have an account? Sign Up</a>

        <!-- Terms and Privacy Buttons -->
        <div class="footer-links">
            <a href="terms.html" class="footer-link">Terms and Conditions</a>
            <a href="privacy.html" class="footer-link">Privacy Policy</a>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>
