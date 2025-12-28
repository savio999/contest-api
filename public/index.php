<?php
$routes = require __DIR__ . '/../app/routes.php';
require_once __DIR__ . '/../app/Controllers/BaseController.php';
require_once __DIR__ . '/../app/Controllers/TestController.php';

$uri = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if (isset($routes[$uri])) {
    if (isset($routes[$uri][$_SERVER['REQUEST_METHOD']])) {
        [$controllerClass, $method] = $routes[$uri][$_SERVER['REQUEST_METHOD']];
        $controller = new $controllerClass();
        $controller->$method();
    } else {
        header('content-type: application/json;');
        http_response_code(405);
        echo json_encode([
            'status' => 'error',
            'message' => 'Method not allowed.',
        ]);
    }
} else {
    header('content-type: application/json;');
    http_response_code(404);
    echo json_encode([
        'status' => 'error',
        'message' => 'Endpoint not found.',
    ]);
}