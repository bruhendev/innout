<?php

require_once(dirname(__FILE__) . '/../app/config/config.php');
// require_once(CONTROLLER_PATH . '/day_records.php');
// loadView('login', ['texto' => 'abc123']);

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri === '/' || $uri === '' || $uri === '/index.php') {
    $uri = '/login.php';
}

// echo $uri;

require_once(CONTROLLER_PATH . "/$uri");