<?php

namespace App\Factories;
use App\Models\ToDoListModel;
use PDO;

class ToDoListModelFactory
{
    public function __invoke($container)
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=todoapp', 'root', 'password');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return new ToDoListModel($db);
    }
}