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
$client = new \GuzzleHttp\Client();
$res = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
    'form_params' => [
        'secret' => $secret,
        'response' => $responseCaptcha,
    ],
    'connect_timeout' => 5,
]);
$http_code = $res->getStatusCode();
$response = json_decode($res->getBody(), true);
if ($http_code == 200 && $response['success']) {
    //send email
    return response()->json([
        'statusCode' => 200,
        'status' => 'captcha valid',
    ], 200);
} else {
    return response()->json([
        'statusCode' => 200,
        'status' => 'captcha invalid',
    ], 200);
}
