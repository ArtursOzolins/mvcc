<?php

namespace App\Repositories;

use App\Models\Assignment;
use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\Writer;

class CSVTaskRepository
{
    private Reader $csvreader;
    private array $data = [];
    public function __construct()
    {
        $this->csvreader = Reader::createFromPath('storage/AssignmentData.csv', 'r');
        $stmt = Statement::create();

        $records = $stmt->process($this->csvreader);
    }

    public function addNew(Assignment $task)
    {
        $csvwriter = Writer::createFromPath('storage/AssignmentData.csv', 'a+');
        $csvwriter->insertOne([$task->getTask()]);
    }

    public function getCsvreader(): Reader
    {
        return $this->csvreader;
    }

    // collection
    public function getData(): iterable
    {
        return $this->csvreader->getRecords();
    }
}
