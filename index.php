<?php
require_once('TaskScheduler.php');

class Book {
    public $name;
    public $qty;
}

$book = unserialize(base64_decode($_GET['book']));
print("Name: $book->name");