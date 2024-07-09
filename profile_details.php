<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile Detail Add</title>
</head>
<body>
    <div class="container">
        <div class="profile-box">
            <div class="profile-image">
                <div id="profile-pic-container">
                    <!-- Empty Circle for Profile Image -->
                </div>
            </div>
            <form action="profile.php" method="POST" enctype="multipart/form-data">
                <label class="upload-btn" for="image-upload">Upload Image</label>
                <input type="file" id="image-upload" name="profile_image" accept="image/*" style="display: none;">
                <div class="profile-details">
                    <input type="text" id="first-name" class="profile-input" name="first_name" placeholder="First Name" required>
                    <input type="text" id="last-name" class="profile-input" name="last_name" placeholder="Last Name" required>
                    <div class="phone-input">
                        <input class="profile-input country-code" name="country_code" placeholder="+91" required>
                        <input type="text" id="phone-number" class="profile-input phone" name="phone_number" placeholder="Mobile Number" required>
                    </div>
                    <input type="text" id="social-media" class="profile-input" name="social_media" placeholder="Social Media Account">
                    <textarea id="bio" class="profile-input" name="bio" placeholder="Add your Bio"></textarea>
                </div>
                <button type="submit" class="btn" id="save-profile-btn">Save Profile</button>
            </form>
        </div>
    </div>

    <script src="js/profile-script.js"></script>
</body>
</html>
