<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <img src="logo.png" alt="GSD Logo" class="logo">
            <h2>Mature Dating</h2>
            
            <?php
            session_start();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               include "includes/db.php";

                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

                // Check if passwords match
                if ($password != $confirm_password) {
                    echo "<p>Passwords do not match!</p>";
                } else {
                    // Hash the password
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $_SESSION["email"]=$email;                    // Prepare and bind
                    $stmt = $conn->prepare("INSERT INTO userdetails (username, email, password) VALUES (?, ?, ?)");
                    $stmt->bind_param("sss", $username, $email, $hashed_password);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "<p>New record created successfully</p>";
                    } else {
                        echo "<p>Error: " . $stmt->error . "</p>";
                    }
                    $stmt =$conn->prepare("select id from userdetails where email ='? '");
                    $stmt->bind_param("s", $email);
                    $result = $stmt->execute();
                    $_SESSION['id']=$result;
                    $stmt->close();
                }

                $conn->close();
            }
            ?>

            <form action="signup.php" method="POST">
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="textbox">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Confirm Password" name="confirm_password" required>
                </div>
                <button type="submit" class="btn " id="gender-link">Sign Up</button>
                <p>or sign up with</p>
                <div class="social-login">
                    <button type="button" class="btn1 google-btn">G</button>
                    <button type="button" class="btn1 facebook-btn">F</button>
                    <button type="button" class="btn1 apple-btn">A</button>
                </div>
                <a href="login.php" class="login-link">have an account! Login</a>
                <div class="checkbox-container">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the <a href="terms.html">Terms and Conditions</a></label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="privacy" name="privacy" required>
                    <label for="privacy">I agree to the <a href="privacy.html">Privacy Policy</a></label>
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
