<?php

namespace App\Factories;

use App\Controllers\AddToDoItemController;

class AddToDoItemControllerFactory
{

    public function __invoke($container)
    {
        $toDoListModel = $container->get('ToDoListModel');
        return new AddToDoItemController($toDoListModel);
    }

}