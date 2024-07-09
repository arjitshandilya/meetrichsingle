<?php
include "includes/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST['gender'];
    $user_id = 1; // Replace with the actual user ID. You should have a way to get the logged-in user's ID.

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE profiledetails SET gender = ? WHERE id = ?");
    $stmt->bind_param("si", $gender, $user_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
        window.location='interested_gender.php'  </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
