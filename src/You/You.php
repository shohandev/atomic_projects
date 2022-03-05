<?php

namespace App\You;

use mysqli;

class You
{
    public $mysqli;
    public $name;
    public $fathers_name;
    public $mothers_name;
    public $gender;
    public $email;
    public $phone;

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
        if (array_key_exists('fathers_name', $data)) {
            $this->fathers_name = $data['fathers_name'];
        }
        if (array_key_exists('mothers_name', $data)) {
            $this->mothers_name = $data['mothers_name'];
        }
        if (array_key_exists('gender', $data)) {
            $this->gender = $data['gender'];
        }
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
        if (array_key_exists('phone', $data)) {
            $this->phone = $data['phone'];
        }
    }

    public function store()
    {
        $query = "INSERT INTO `you`(`name`, `fathers_name`, `mothers_name`, `gender`, `email`, `phone`) VALUES ('" . $this->name . "','" . $this->fathers_name . "','" . $this->mothers_name . "','" . $this->gender . "','" . $this->email . "','" . $this->phone . "')";

        // echo $query;
        // die();
        $result = $this->mysqli->query($query);

        if ($result) {
            $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">Your information has been saved successfully</h2>';
        } else {
            $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to save your information. Please try again.</h2>';
        }

        header('location:create.php');
    }
}
