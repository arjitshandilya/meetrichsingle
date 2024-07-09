<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];
} else {
    echo "Invalid request.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Inconsolata", monospace;
            font-optical-sizing: auto;
            font-weight: bolder;
            font-style: normal;
            font-variation-settings: "wdth" 100;
        }

        html, body {
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 1)), url("./pexels5.jpg");
            background-size: cover;
            background-position: center;
        }

        ::selection {
            background: #c95e21;
            color: #fff;
        }

        .wrapper {
            overflow: hidden;
            max-width: 390px;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
        }

        .title-text {
            display: flex;
            width: 100%;
        }

        .title {
            width: 100%;
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .form-container {
            width: 100%;
            overflow: hidden;
        }

        .form-inner {
            display: flex;
            width: 100%;
        }

        .form-inner form {
            width: 100%;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .field {
            height: 50px;
            width: 100%;
            margin-top: 20px;
        }

        .field input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 15px;
            border-radius: 15px;
            border: 1px solid lightgrey;
            border-bottom-width: 2px;
            font-size: 17px;
            transition: all 0.3s ease;
        }

        .field input:focus {
            border-color: #c95e21;
        }

        .field input::placeholder {
            color: #999;
            transition: all 0.3s ease;
        }

        .field input:focus::placeholder {
            color: #c95e21;
        }

        .btn {
            height: 50px;
            width: 100%;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        .btn .btn-layer {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: -webkit-linear-gradient(left, #472a19, #f59d45);
            border-radius: 15px;
            transition: all 0.4s ease;
        }

        .btn:hover .btn-layer {
            left: 0;
        }

        .btn input[type="submit"] {
            height: 100%;
            width: 100%;
            z-index: 1;
            position: relative;
            background: none;
            border: none;
            color: #fff;
            padding-left: 0;
            border-radius: 15px;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
        }

        .alert {
            color: red;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title">Reset Password</div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="update_password.php" method="post">
                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                    <div class="field">
                        <input type="password" name="new_password" id="new_password" placeholder="New Password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm New Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Reset Password">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
