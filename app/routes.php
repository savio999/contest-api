<?php

use App\Controllers\TestController;
use App\Controllers\DBController;

$routes = [
    'test' => [
        'GET' => [TestController::class, 'handleTest']
    ],
    'setup-db' => [
        'POST' => [DBController::class, 'setUpDb']
    ]
];

return $routes;