<?php

$request_method = $_SERVER['REQUEST_METHOD'];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$basePath = '/custom_app';

$route = substr($requestUri, strlen($basePath));

$route = '/' . ltrim($route, '/');