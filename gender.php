<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Gender Selection</title>
    <link rel="stylesheet" href="css/gender.css">
</head>
<body>
    <div class="container">
        <div class="gender-box">
            <form action="save_gender.php" method="post">
                <i class='bx bx-male-female icon'></i>
                <h2>I'm a:</h2>
                <input type="hidden" name="gender" id="gender">
                <div class="button-container">
                    <button type="button" class="btn gender-btn" onclick="submitForm('Man')">Man</button>
                    <button type="button" class="btn gender-btn" onclick="submitForm('Woman')">Woman</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function submitForm(gender) {
            document.getElementById('gender').value = gender;
            document.querySelector('form').submit();
        }
    </script>
</body>
</html>
