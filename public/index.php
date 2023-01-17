<?php

use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', function (){
    echo 'get router';
});

$app->router->get('/contact', 'contact');

$app->router->get('/users', function (){
    echo 'users get router';
});

$app->run();