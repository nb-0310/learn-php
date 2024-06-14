<?php
namespace Acme;

class Task {
    public $title;
    public $description;
    public $completed;

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    public function complete() {
        $this->completed = true;
    }
}
