<?php

namespace App\Controllers;

class AddToDoItemController
{
    protected $toDoListModel;

    public function __construct($toDoListModel)
    {
        $this->toDoListModel = $toDoListModel;
    }

    public function __invoke($request, $response, $args)
    {
        $newToDoItem = $request->getParsedBody();
        $toDoListModel = $this->toDoListModel;
        $title = $newToDoItem['title'];
        $toDoListModel->addNewToDoListItem($title);
        return $response->withHeader('Location', '/');

    }
}