<?php
header('Access-Control-Allow-Origin: https://tradersera.com/');
header('Content-Type: text/html; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required fields are set
    $required_fields = ['fname', 'lname', 'email', 'phone', 'introducing-broker', 'monthly-traders', 'account_no'];
    // Assign form data to variables and sanitize inputs
    $friend_name = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    $friend_email = filter_var($_POST['lname'], FILTER_SANITIZE_EMAIL);
    $friend_contact = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $friend_country = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $your_name = filter_var($_POST['introducing-broker'], FILTER_SANITIZE_STRING);
    $your_email = filter_var($_POST['monthly-traders'], FILTER_SANITIZE_EMAIL);
    $account_no = filter_var($_POST['account_no'], FILTER_SANITIZE_STRING);
    $average_deposit = filter_var($_POST['average-deposit-per-client'], FILTER_SANITIZE_STRING);
    $client_volume = filter_var($_POST['client-average-volume'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    // Prepare email content
    $email_to = "support@tradersera.com";
    $email_subject = "Become An IB";
    $email_message = "Form details below.\n\n";
    $email_message .= "Friend's Name: " . htmlspecialchars($friend_name) . "\n";
    $email_message .= "Friend's Email: " . htmlspecialchars($friend_email) . "\n";
    $email_message .= "Friend's Contact: " . htmlspecialchars($friend_contact) . "\n";
    $email_message .= "Friend's Country: " . htmlspecialchars($friend_country) . "\n";
    $email_message .= "Your Name: " . htmlspecialchars($your_name) . "\n";
    $email_message .= "Your Email: " . htmlspecialchars($your_email) . "\n";
    $email_message .= "Your TradersEra Account No.: " . htmlspecialchars($account_no) . "\n";
    $email_message .= "Average Deposit per Client: " . htmlspecialchars($average_deposit) . "\n";
    $email_message .= "Client Average Volume: " . htmlspecialchars($client_volume) . "\n";
    $email_message .= "Message: " . htmlspecialchars($message) . "\n";
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
    // Logging the form submission
    $log_file = 'error_log.txt'; // Ensure this file is writable
    file_put_contents($log_file, "Form submission attempt\n", FILE_APPEND);
    // Additional logging for email sending
    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        file_put_contents($log_file, "Email sent successfully\n", FILE_APPEND);
    } else {
        $error_message = "Email sending failed\n";
        file_put_contents($log_file, $error_message, FILE_APPEND);
    }
} else {
    echo 'We are sorry, but there appears to be a problem with the form you submitted.';
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>