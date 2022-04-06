<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'ToDoListPageController');

    $app->post('/', 'AddToDoItemController');

    $app->get('/taskComplete/', 'UpdateToDoItemController');

};
