<?php

namespace App\Models;

class Assignment
{
    private string $task;

    public function __construct(string $task)
    {
        $this->task = $task;
    }

    public function getTask(): string
    {
        return $this->task;
    }
}