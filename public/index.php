<?php

header('content-type: application/json;');

$uri = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri === 'test') {
    http_response_code(200);
    echo json_encode([
        'status' => 'success',
        'message' => 'Test endpoint reached successfully.',
    ]);
} else {
    http_response_code(404);
    echo json_encode([
        'status' => 'error',
        'message' => 'Endpoint not found.',
    ]);
}