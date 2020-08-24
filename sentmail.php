<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// $data = json_decode(file_get_contents('php://input'), true);
//include guzzle http
require 'guzzle/autoload.php';

$client = new GuzzleHttp\Client();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $secret = "6LcPxsEZAAAAAKymg_DHRyuKixS71UVJP2EaH42k";
    $responseCaptcha = $_POST['response'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $body = "Name: " . $name . ' Email: ' . $email . ' Message: ' . $message;
    $client = new \GuzzleHttp\Client();
    $res = $client->request('post', 'https://www.google.com/recaptcha/api/siteverify', [
        'form_params' => [
            'secret' => $secret,
            'response' => $responseCaptcha,
        ],
        'connect_timeout' => 5,
    ]);
    $http_code = $res->getStatusCode();
    $response = json_decode($res->getBody(), true);
    if ($http_code == 200 && $response['success']) {
        $recipientEmail = 'ijlal.ahmad@switchsolutions.com.pk';
        $res = $client->request('post', 'http://api.bakhaberkissan.com/v1/api_email.php', [
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
            echo json_encode($data);
        } else {
            $data = ['statusCode' => '400', 'status' => 'error'];
            echo json_encode($data);
        }

    } else {
        $data = ['statusCode' => '401', 'status' => 'error'];
        return json_encode($data);
    }
} else {
    echo 'post calls only';
}
