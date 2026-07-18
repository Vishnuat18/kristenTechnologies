<?php
// api/resend.php

if (file_exists(dirname(__DIR__) . '/config.php')) {
    require_once dirname(__DIR__) . '/config.php';
}

function send_resend_email($subject, $htmlBody, $attachments = []) {
    $apiKey = defined('RESEND_API_KEY') ? RESEND_API_KEY : (getenv('RESEND_API_KEY') ?: '');
    $from = defined('RESEND_FROM') ? RESEND_FROM : (getenv('RESEND_FROM') ?: 'onboarding@resend.dev');
    $to = defined('RESEND_TO') ? RESEND_TO : (getenv('RESEND_TO') ?: 'vishnurajan24766@gmail.com');
    $url = 'https://api.resend.com/emails';
    
    $payload = [
        'from' => $from,
        'to' => $to,
        'subject' => $subject,
        'html' => $htmlBody,
    ];
    
    if (!empty($attachments)) {
        $payload['attachments'] = $attachments;
    }
    
    $jsonPayload = json_encode($payload);
    
    $options = [
        'http' => [
            'header'  => "Content-type: application/json\r\n" .
                         "Authorization: Bearer " . $apiKey . "\r\n",
            'method'  => 'POST',
            'content' => $jsonPayload,
            'ignore_errors' => true // Allows us to fetch the response body even on 4xx/5xx errors
        ]
    ];
    
    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    
    // Parse HTTP response code from headers
    $httpCode = 0;
    if (isset($http_response_header) && isset($http_response_header[0])) {
        if (preg_match('#HTTP/[\d\.]+\s+(\d+)#', $http_response_header[0], $matches)) {
            $httpCode = intval($matches[1]);
        }
    }
    
    return [
        'success' => $httpCode >= 200 && $httpCode < 300,
        'response' => $response,
        'http_code' => $httpCode
    ];
}

function enable_cors() {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit();
    }
}

function is_json_request() {
    $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
    $contentType = $_SERVER['CONTENT_TYPE'] ?? '';
    return strpos($accept, 'application/json') !== false || 
           strpos($contentType, 'application/json') !== false ||
           isset($_POST['is_json']) ||
           isset($_GET['is_json']);
}

function send_api_response($success, $message, $extraData = []) {
    if (is_json_request()) {
        header('Content-Type: application/json');
        http_response_code($success ? 200 : 400);
        echo json_encode(array_merge([
            'success' => $success,
            'message' => $message
        ], $extraData));
        exit();
    } else {
        $escapedMsg = addslashes($message);
        echo "<script>alert('{$escapedMsg}'); window.history.back();</script>";
        exit();
    }
}

