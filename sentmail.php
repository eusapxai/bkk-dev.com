<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//include guzzle http
require 'guzzle/autoload.php';

$client = new GuzzleHttp\Client();

$secret = "6LfxRcEZAAAAAPpFTSz63QPQAwYrsujYd__qIVk7";
$responseCaptcha = $request->response;
$name = $request->name;
$email = $request->email;
$message = $request->message;
$body = "Name: " . $name . ' Email: ' . 'Message: ' . $message;
// $client = new \GuzzleHttp\Client();
// $res = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
//     'form_params' => [
//         'secret' => $secret,
//         'response' => $responseCaptcha,
//     ],
//     'connect_timeout' => 5,
// ]);
// $http_code = $res->getStatusCode();
// $response = json_decode($res->getBody(), true);
// if ($http_code == 200 && $response['success']) {
//send email
$recipientEmail = 'ijlal.ahmad@switchsolutions.com.pk';
$res = $client->request('POST', 'http://api.bakhaberkissan.com/v1/api_email.php', [
    'form_params' => [
        'email' => $recipientEmail,
        'subject' => 'Bkk website contact',
        'message' => $body,
    ],
    'connect_timeout' => 5,
]);
$http_code = $res->getStatusCode();
$response = json_decode($res->getBody(), true);
if ($http_code == 200 && $response['status'] == 1) {
    $data = ['statusCode' => '200', 'status' => 'success'];
    return json_encode($data);
} else {
    $data = ['statusCode' => '400', 'status' => 'error'];
    return json_encode($data);
}

// } else {
//     $data = ['statusCode' => '401', 'status' => 'error'];
//     return json_encode($data);
// }
