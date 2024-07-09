<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/dob.css">
    <title>Date of Birth</title>
    
</head>
<body>
    <div class="container">
        <div class="dob-box">
            <i class='bx bxs-cake icon'></i>
            <h2>My Date Of Birth:</h2>
            <div class="dob-container">
                <select id="date" class="dob-select">
                    <option value="" disabled selected>Date</option>
                    <!-- Populate dates 1-31 -->
                    <script>
                        for (let i = 1; i <= 31; i++) {
                            document.write(`<option value="${i}">${i}</option>`);
                        }
                    </script>
                </select>
                <select id="month" class="dob-select">
                    <option value="" disabled selected>Month</option>
                    <!-- Populate months 1-12 -->
                    <script>
                        const months = [
                            'January', 'February', 'March', 'April', 'May', 'June',
                            'July', 'August', 'September', 'October', 'November', 'December'
                        ];
                        for (let i = 1; i <= 12; i++) {
                            document.write(`<option value="${i}">${months[i-1]}</option>`);
                        }
                    </script>
                </select>
                <select id="year" class="dob-select">
                    <option value="" disabled selected>Year</option>
                    <!-- Populate years dynamically -->
                    <script>
                        const currentYear = new Date().getFullYear();
                        for (let i = currentYear - 18; i >= 1900; i--) {
                            document.write(`<option value="${i}">${i}</option>`);
                        }
                    </script>
                </select>
            </div>
            <button type="button" class="btn" id="confirm-btn">Confirm</button>
            <p id="error-message" class="error-message"></p>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
