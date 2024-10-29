<?php
$data = [
    "public_key" => "02e81042-9e20-476d-9f8c-37c84bedf857",
    "private_secret" => "zaq9v462wsep3hjrno",
    "client_email" => "client_email@gmail.com",
    "reference_id" => "unique_tx",
    "amount" => 10,
    "callback_url" => "http://localhost/readies/callback.php",
    "success_url" => "http://localhost/readies/callback.php",
    "cancel_url" => "http://localhost/readies/callback.php"
];


$curl = curl_init();
// Set the URL of the API endpoint
curl_setopt($curl, CURLOPT_URL, 'http://localhost/matrevicinvoice/api/api');
// Set the request method to POST
curl_setopt($curl, CURLOPT_POST, true);
// Set the content type to application/json
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen(json_encode($data))
]);
// Set the POST data
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
// Set option to return the response instead of outputting it
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$response = curl_exec($curl);
print_r($response);
// Check for errors
// Check for errors

curl_close($curl);
?>
