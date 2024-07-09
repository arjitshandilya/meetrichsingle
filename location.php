<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/location.css">
    <title>Location Selection</title>
</head>
<body>
    <div class="container">
        <div class="location-box">
            <i class='bx bxs-location-plus icon'></i>
            <h2>My Location:</h2>
            <div class="location-container">
                <input type="text" id="zipcode" class="location-input" placeholder="Enter ZIP Code">
            </div>
            <button type="button" class="btn" id="confirm-location-btn">Confirm</button>
            <p id="error-message" class="error-message"></p>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>