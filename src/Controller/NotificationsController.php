<?php

namespace notificationService\controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class NotificationsController {


    public function add(ServerRequestInterface $request, ResponseInterface $response, array $args) {
        return $response->getBody()->write('dentro do add');
    }

    //    public function addItemToQueue($param) {}
}
