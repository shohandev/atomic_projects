<?php
namespace App\Book;

class Book{
    public $title;
    public $author;
    public function __construct()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'atomic_projects');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
    }

    public function prepare($data=[]) 
    {
        if(array_key_exists('title', $data)) {
            $this->title = $data['title'];
        }
        if(array_key_exists('author', $data)) {
            $this->author = $data['author'];
        }
    }

    public function store()
    {
        
    }
}

?>