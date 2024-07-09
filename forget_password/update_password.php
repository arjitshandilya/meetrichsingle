<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'datingdb');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Verify the token
    $stmt = $conn->prepare("SELECT email FROM details WHERE reset_token = ?");
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->fetch();
    $stmt->close();

    if ($email) {
        // Update the password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE details SET password = ? WHERE email = ?");
        $stmt->bind_param('ss', $hashed_password, $email);
        
        if ($stmt->execute()) {
            echo "Your password has been reset successfully.";
            // Nullify the token
            $stmt = $conn->prepare("UPDATE details SET reset_token = NULL WHERE email = ?");
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "Failed to reset the password.";
        }
    } else {
        echo "Invalid token.";
    }

    $conn->close();
}
?>



?>
