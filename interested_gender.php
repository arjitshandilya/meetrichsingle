<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/interested_gender.css">
    <title>Gender Selection</title>
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

.intrested-gender-box {
    background-color: #C3B4A1;
    
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
    width: 100%;
    animation: fadeIn 1s ease-out forwards;
}

.icon {
    width: 100px;
    margin-bottom: 20px;
    font-size: 100px;
}

.intrested-gender-box h2 {
    color: #333;
    margin-bottom: 20px;
}

.button-container {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.gender-btn {
    background-color: #ff4081;
    border: none;
    padding: 12px 24px;
    cursor: pointer;
    color: #fff;
    border-radius: 6px;
    font-size: 16px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.gender-btn:hover {
    background-color: #e6007e;
    transform: scale(1.1);
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.fadeOut {
    opacity: 0;
    transition: opacity 0.5s ease-out;
}

    </style>
    
</head>
<body>
    <div class="container">
        <div class="intrested-gender-box">
            <i class='bx bx-male-female icon'></i>
            <h2>I'm Interested in:</h2>
            <div class="button-container">
                <button type="button" class="btn gender-btn" id="DOB-link">Man</button>
                <button type="button" class="btn gender-btn" id="DOB-link">Women</button>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
