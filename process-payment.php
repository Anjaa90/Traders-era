<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $amount = $_POST['amount'];
    // API endpoint
    $url = 'https://payment-gateway.example.com/api/payments';
    // Prepare data to be sent to the API
    $data = array(
        'name' => $name,
        'email' => $email,
        'mobile' => $mobile,
        'amount' => $amount
    );
    // Use cURL to send the POST request
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    // Execute the request
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($http_code == 200) {
        // Redirect to the payment success page
        header("Location: /payment-success.php");
        exit();
    } else {
        echo "Payment failed. Please try again.";
    }
}
?>