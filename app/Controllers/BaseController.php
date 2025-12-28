<?php

namespace App\Controllers;

class BaseController
{
    public function jsonResponse($data, $statusCode = 200)
    {
        http_response_code($statusCode);
        header('Content-Type: application/json;');
        echo json_encode($data);
    }
}