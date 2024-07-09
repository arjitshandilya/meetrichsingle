<?php
include "includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $country_code = $_POST['country_code'];
    $phone_number = $_POST['phone_number'];
    $social_media = $_POST['social_media'];
    $bio = $_POST['bio'];

    // Handle image upload
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
                // Image uploaded successfully
                $profile_image = $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        } else {
            echo "File is not an image.";
            exit;
        }
    } else {
        $profile_image = null; // No image uploaded
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO profiledetails (firstname, lastname, countrycode, contact, socialmedia, bio,image) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $first_name, $last_name, $country_code, $phone_number, $social_media, $bio, $profile_image);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script> window.location = 'landing.php' </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
