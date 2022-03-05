<?php

namespace App\User;

use mysqli;

class User
{
    public $mysqli;
    public $name;
    public $username;
    public $email;
    public $phone;
    public $gender;
    public $date_of_birth;
    public $password;
    public $confirm_password;

    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '', 'atomic_projects');

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    public function prepare($data = array())
    {
        if (array_key_exists('name', $data)) {
            $this->name = $data['name'];
        }
        if (array_key_exists('username', $data)) {
            $this->username = $data['username'];
        }
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
        if (array_key_exists('phone', $data)) {
            $this->phone = $data['phone'];
        }
        if (array_key_exists('gender', $data)) {
            $this->gender = $data['gender'];
        }
        if (array_key_exists('date_of_birth', $data)) {
            $this->date_of_birth = $data['date_of_birth'];
        }
        if (array_key_exists('password', $data)) {
            $this->password = $data['password'];
        }
        if (array_key_exists('confirm_password', $data)) {
            $this->confirm_password = $data['confirm_password'];
        }
    }


    public function store()
    {
        $query = "INSERT INTO `user`(`name`, `username`, `email`, `phone`, `gender`, `date_of_birth`,`password`,`confirm_password`) VALUES ('" . $this->name . "','" . $this->username . "','" . $this->email . "','" . $this->phone . "','" . $this->gender . "','" . $this->date_of_birth . "','" . $this->password . "','" . $this->confirm_password . "')";

        // echo $query;
        //   die();
        $result = $this->mysqli->query($query);

        if ($result) {
            $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">Your information has been saved successfully</h2>';
        } else {
            $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to save your information. Please try again.</h2>';
        }

        header('location:create.php');
    }

    public function index()
    {
        $query = "SELECT * FROM  user";

        $result = $this->mysqli->query($query);

        $users = $result->fetch_all(MYSQLI_ASSOC);

        return $users;
    }

    public function show($id)
    {
        $query = "SELECT * FROM  user WHERE `id`=" . $id;

        $result = $this->mysqli->query($query);

        $user = $result->fetch_assoc();

        return $user;
    }

    public function delete($id)
    {
        $query = "DELETE FROM  user WHERE `id`=" . $id;

        $result = $this->mysqli->query($query);

        if ($result) {
            $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">User information has been deleted.</h2>';
        } else {
            $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to delete information. Please try again.</h2>';
        }

        header('location:index.php');
    }
}
