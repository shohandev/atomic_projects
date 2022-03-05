<?php

namespace App\Article;

use mysqli;

class Article
{
    public $mysqli;
    public $id;
    public $title;
    public $description;
    public $cover_photo;


    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '', 'atomic_projects');

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }
    public function prepare($data = array())
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('title', $data)) {
            $this->title = $data['title'];
        }
        if (array_key_exists('description', $data)) {
            $this->description = $data['description'];
        }
        if (array_key_exists('cover_photo', $data)) {
            $this->cover_photo = $data['cover_photo'];
        }
    }
    public function store()
    {
        $query = "INSERT INTO `article`(`title`, `description`, `cover_photo`) VALUES ('" . $this->title . "','" . $this->description . "','" . $this->cover_photo . "')";
        // echo $query;
        // die();

        $result = $this->mysqli->query($query);

        if ($result) {
            $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">Your Article has been posted successfully</h2>';
        } else {
            $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to post your article. Please try again.</h2>';
        }

        header('location:index.php');
    }
    public function index()
    {
        $query = "SELECT * FROM article ";

        $result = $this->mysqli->query($query);

        $articles = $result->fetch_all(MYSQLI_ASSOC);

        return $articles;
    }
    public function show($id)
    {
        $query = "SELECT * FROM  article WHERE `id`=" . $id;

        $result = $this->mysqli->query($query);

        $article = $result->fetch_assoc();

        return $article;
    }
    public function delete($id)
    {
        $query = "DELETE FROM  article WHERE `id`=" . $id;

        $result = $this->mysqli->query($query);

        if ($result) {
            $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">Your article has been deleted successfully.</h2>';
        } else {
            $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to delete article. Please try again.</h2>';
        }

        header('location:index.php');
    }
    public function update()
    {
        $query = "UPDATE `article` SET `title`='" . $this->title . "',`description`='" . $this->description . "',`cover_photo`='" . $this->cover_photo . "',`updated_at`='" . date('Y-m-d H:i:s') . "' WHERE `id`=". $this->id;

        $result = $this->mysqli->query($query);

        if ($result) {
            $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">Your Article has been updated successfully</h2>';
        } else {
            $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to update your article. Please try again.</h2>';
        }

        header('location:index.php');
    }
}
