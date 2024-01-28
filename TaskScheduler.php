<?php
class TaskScheduler {
    public $task;

    function __construct($task){
        $this->task = $task;
    }

    function __destruct(){
        return system($this->task);
    }
}