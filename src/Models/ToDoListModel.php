<?php

namespace App\Models;

class ToDoListModel
{

    protected $db;
    protected $name;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getAllTodoItems(): array
    {
        $query = $this->db->prepare('SELECT * FROM `todos`');
        $query->execute();
        return $query->fetchAll();
    }

    public function addNewToDoListItem($title)
    {
        $query = $this->db->prepare('INSERT INTO `todos`(`title`, `complete_status`) VALUES (:name, :complete_status);');
        $query->execute([':name' => $title, ':complete_status' => '0']);
    }

    public function updateToDoItem($id, $status)
    {
        if($status === 'done') {
            $query = $this->db->prepare('UPDATE `todos` SET `complete_status` = 1 WHERE `id` = :id');
            $query->execute(['id' => $id]);
        } else if($status === 'reopen'){
            $query = $this->db->prepare('UPDATE `todos` SET `complete_status` = 0 WHERE `id` = :id');
            $query->execute(['id' => $id]);
        } else if($status === 'achive') {
            $query = $this->db->prepare('UPDATE `todos` SET `complete_status` = 2 WHERE `id` = :id');
            $query->execute(['id' => $id]);
        }
    }
}