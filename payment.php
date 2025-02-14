<?php
header('Content-Type: application/json');
function makePayment() {
    $data = array(
        'MerchantRef' => '8bb6z8a5',
        'API_Key' => '2ea4c5ge',
        'Redirect_URL' => 'https://www.w3schools.com/'
    );
    $data_json = json_encode($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mt.sibawallet.net:5000/userToken');  
    curl_setopt($ch, CURLOPT_POST, 2);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_json)
    ));
    // Temporarily disable SSL verification (not recommended for production)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_CAINFO, '/path/to/cacert.pem');
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo json_encode(['error' => curl_error($ch)]);
    } else {
        $res = json_decode($response, true);
        if (isset($res['url'])) {
            echo json_encode(['url' => $res['url']]);
        } else {
            echo json_encode(['error' => 'URL not found in the response.']);
        }
    }
    curl_close($ch);
}
makePayment();
?>