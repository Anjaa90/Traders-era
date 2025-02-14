<?php
header('Access-Control-Allow-Origin: https://tradersera.com/');
header('Content-Type: text/html; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required fields are set
    $required_fields = ['friend_name', 'friend_email', 'friend_contact', 'friend_country', 'your_name', 'your_email', 'account_no'];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field])) {
            die('We are sorry, but there appears to be a problem with the form you submitted.');
        }
    }
    // Assign form data to variables and sanitize inputs
    $friend_name = filter_var($_POST['friend_name'], FILTER_SANITIZE_STRING);
    $friend_email = filter_var($_POST['friend_email'], FILTER_SANITIZE_EMAIL);
    $friend_contact = filter_var($_POST['friend_contact'], FILTER_SANITIZE_STRING);
    $friend_country = filter_var($_POST['friend_country'], FILTER_SANITIZE_STRING);
    $your_name = filter_var($_POST['your_name'], FILTER_SANITIZE_STRING);
    $your_email = filter_var($_POST['your_email'], FILTER_SANITIZE_EMAIL);
    $account_no = filter_var($_POST['account_no'], FILTER_SANITIZE_STRING);
    $ip = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
    // Prepare email content
    $email_to = "support@tradersera.com";
    $email_subject = "TradersEra Referral Form";
    $email_message = "Form details below.\n\n";
    $email_message .= "Sender's IP: " . htmlspecialchars($ip) . "\n\n";
    $email_message .= "Friend's Name: " . htmlspecialchars($friend_name) . "\n";
    $email_message .= "Friend's Email: " . htmlspecialchars($friend_email) . "\n";
    $email_message .= "Friend's Contact: " . htmlspecialchars($friend_contact) . "\n";
    $email_message .= "Friend's Country: " . htmlspecialchars($friend_country) . "\n";
    $email_message .= "Your Name: " . htmlspecialchars($your_name) . "\n";
    $email_message .= "Your Email: " . htmlspecialchars($your_email) . "\n";
    $email_message .= "Your TradersEra Account No.: " . htmlspecialchars($account_no) . "\n";
    $headers = 'From: noreply@tradersera.com' . "\r\n" .
               'Reply-To: ' . $your_email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    // Send email and handle success/failure
    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        echo '<script language="javascript" type="text/javascript">
                alert("Thank you for the message. We will contact you shortly.");
                window.location = "index.php"; // Redirect to thank you page
              </script>';
    } else {
        echo '<script language="javascript" type="text/javascript">
            alert("Message failed. Please, send an email to support@tradersera.com");
            window.location = "error.php"; // Redirect to error page
        </script>';
    }
} else {
    echo 'We are sorry, but there appears to be a problem with the form you submitted.';
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $log_file = 'error_log.txt'; // Ensure this file is writable
    file_put_contents($log_file, "Form submission attempt\n", FILE_APPEND);

    foreach ($required_fields as $field) {
        if (!isset($_POST[$field])) {
            $error_message = "Missing field: $field\n";
            file_put_contents($log_file, $error_message, FILE_APPEND);
            die('We are sorry, but there appears to be a problem with the form you submitted.');
        }
    }
    // Additional logging for email sending
    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        file_put_contents($log_file, "Email sent successfully\n", FILE_APPEND);
        echo '<script language="javascript" type="text/javascript">
            alert("Thank you for the message. We will contact you shortly.");
            window.location = "index.php"; // Redirect to thank you page
        </script>';
    } else {
        $error_message = "Email sending failed\n";
        file_put_contents($log_file, $error_message, FILE_APPEND);
        echo '<script language="javascript" type="text/javascript">
            alert("Message failed. Please, send an email to support@tradersera.com");
            window.location = "error.php"; // Redirect to error page
        </script>';
    }
} else {
    echo 'We are sorry, but there appears to be a problem with the form you submitted.';
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>