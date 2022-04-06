<?php

namespace App\Controllers;

class UpdateToDoItemController
{
    protected $toDoListModel;

    public function __construct($toDoListModel)
    {
        $this->toDoListModel = $toDoListModel;
    }

    public function __invoke($request, $response, $args)
    {
        $queryParams = $request->getQueryParams();
        $toDoListModel = $this->toDoListModel;
        $toDoListModel->updateToDoItem($queryParams['id'], $queryParams['status']);
        return $response->withHeader('Location', '/');
    }
}