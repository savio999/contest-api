<?php

use App\Controllers\TestController;

$routes = [
    'test' => [
        'GET' => [TestController::class, 'handleTest']
    ]
];

return $routes;