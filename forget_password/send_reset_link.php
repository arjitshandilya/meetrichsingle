<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'datingdb');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email exists
    $stmt = $conn->prepare("SELECT email FROM details WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));

        // Store the token in the database
        $stmt = $conn->prepare("UPDATE details SET reset_token=(?) where email = '$email' ");
        $stmt->bind_param('s', $token);
        $stmt->execute();


        //create object of phpmailer
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.mailersend.net';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'MS_T7I8nc@trial-yzkq34019yxld796.mlsender.net';
        $mail->Password = 'CLypm3NgvATXr5nm';


        $mail->setFrom('MS_T7I8nc@trial-yzkq34019yxld796.mlsender.net', 'noreply');
        $mail->addAddress($email);  



        // Send the email
        $reset_link = "http://localhost/arjit/gffg2/forget_password/reset_password.php?token=" . $token;
        //add your own directory path to forget password folder
        $subject = "Password Reset Request";
        $message = "Click the following link to reset your password: " . $reset_link;
        // $headers = "From: development5@arisen.in";
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject =  $subject ;
        $mail->Body    = $message ;

        if($mail->send()) {
           echo '<script> window.alert("mail send successfully") </script>';
           header( " Location : index.php ");
           exit();
           }
    } else {
        echo "No account found with that email address.";
    }

    $stmt->close();
    $conn->close();
}
?>
