<?php

namespace App\Controllers;

use App\Models\Assignment;
use App\Repositories\CSVTaskRepository;

class AssignmentController
{

    private array $tasksRepository;

    public function app()
    {
        $rep = new CSVTaskRepository();
        $tasks = $rep->getData();
        require_once 'app/Views/AppView.php';
    }

    public function add()
    {
        require_once 'app/Views/AddView.php';
    }

    public function store()
    {
        $task = new Assignment($_POST['task']);
        $rep = new CSVTaskRepository();
        $rep->addNew($task);

        header('Location: /');
    }
}
