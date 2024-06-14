<?php
class Task
{
    public $title;
    public $description;
    public $completed;
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task("Learn OOPS", "Learn OOPS in PHP");
var_dump($task->title);
var_dump($task->description);