<?php
// Include database connection code here

// Placeholder for landing page logic (to be implemented)
// For demonstration, showing session data
session_start();
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User';
$user_coins = isset($_SESSION['user_coins']) ? $_SESSION['user_coins'] : 0;
$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('image/background.jpg');
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .landing-box {
            background-color: #C3B4A1;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .logo {
            width: 100px; /* Adjust size as needed */
            margin-bottom: 20px;
        }

        .landing-box h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .user-info {
            margin-bottom: 20px;
        }

        .user-info img {
            width: 80px; /* Adjust size as needed */
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-info .user-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .user-info .user-coins {
            font-size: 16px;
            color: #888;
        }

        .navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .navigation a {
            text-decoration: none;
            color: #fff;
            background-color: #ff4081;
            padding: 10px 20px;
            border-radius: 6px;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        .navigation a:hover {
            background-color: #e6007e;
        }

        .logout-btn {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="landing-box">
            <?PHP
                
            ?>
            <img src="images/logo.png" alt="Logo" class="logo">
            <h2>Welcome Back, <?php echo $user_name; ?>!</h2>
            <div class="user-info">
                <img src="uploads/user-avatar.jpg" alt="User Avatar">
                <div class="user-name"><?php echo $user_name; ?></div>
                <div class="user-coins">Coins: <?php echo $user_coins; ?></div>
            </div>
            <div class="navigation">
                <a href="logout.php" class="logout-btn" id="logOut-link">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
