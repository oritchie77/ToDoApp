<?php

namespace App\Factories;

use App\Controllers\ToDoListPageController;


class ToDoListPageControllerFactory
{
    public function __invoke($container)
    {
        $toDoListModel = $container->get('ToDoListModel');
        $renderer = $container->get('renderer');
        return new ToDoListPageController($toDoListModel, $renderer);
    }
}