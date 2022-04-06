<?php

namespace App\Controllers;

class ToDoListPageController
{

    protected $toDoListModel;
    protected $renderer;

    public function __construct($toDoListModel, $renderer)
    {
        $this->toDoListModel = $toDoListModel;
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        $toDoItems = $this->toDoListModel->getAllToDoItems();
        $data = [
            'toDoItems' => $toDoItems
        ];

        return $this->renderer->render($response, "index.php", $data);
    }
}