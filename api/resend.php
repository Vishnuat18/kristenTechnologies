<?php
// api/resend.php

function send_resend_email($subject, $htmlBody, $attachments = []) {
    $apiKey = 're_EW4LtVCq_3NBVyot9jEYuME37Fz4PNmjo';
    $url = 'https://api.resend.com/emails';
    
    $payload = [
        'from' => 'onboarding@resend.dev',
        'to' => 'vishnurajan24766@gmail.com',
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
