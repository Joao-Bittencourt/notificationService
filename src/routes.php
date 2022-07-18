<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use notificationService\controller\NotificationsController;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$app->get('/', function (Request $request, Response $response, $args) {
    return $response->getBody()->write('hello 2');
});

$app->get('/notification/add', NotificationsController::class . ':add');

$app->get('/notification/publish', function (Request $request, Response $response, $args) {
    return $response->getBody()->write('hello');
});
$app->run();
