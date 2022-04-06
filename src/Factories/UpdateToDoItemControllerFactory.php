<?php

namespace App\Factories;

use App\Controllers\UpdateToDoItemController;

class UpdateToDoItemControllerFactory
{
    public function __invoke($container)
    {
        $toDoListModel = $container->get('ToDoListModel');
        return new UpdateToDoItemController($toDoListModel);
    }
}