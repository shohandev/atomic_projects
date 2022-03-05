<?php

namespace App\Profile;

use mysqli;

class Profile
{
    public $mysqli;
    public $first_name;
    public $last_name;
    public $email;
    public $profile_photo;


    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '', 'atomic_projects');

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }


    public function prepare($data = array())
    {
        if (array_key_exists('first_name', $data)) {
            $this->first_name = $data['first_name'];
        }
        if (array_key_exists('last_name', $data)) {
            $this->last_name = $data['last_name'];
        }
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
        if (array_key_exists('profile_photo', $data)) {
            $this->profile_photo = $data['profile_photo'];
        }
    }
    public function store()
    {
        $query = "INSERT INTO `profile`(`first_name`, `last_name`, `email`, `profile_photo`) VALUES ('" . $this->first_name . "','" . $this->last_name . "','" . $this->email . "','" . $this->profile_photo . "')";

        $result = $this->mysqli->query($query);

        if ($result) {
            $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">Your information has been saved successfully</h2>';
        } else {
            $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to save your information. Please try again.</h2>';
        }

        header('location:index.php');
 
   }
   public function index()
   {
       $query = "SELECT * FROM  profile";

       $result = $this->mysqli->query($query);

       $profiles = $result->fetch_all(MYSQLI_ASSOC);

       return $profiles;
   }

   public function show($id)
   {
       $query = "SELECT * FROM  profile WHERE `id`=" . $id;

       $result = $this->mysqli->query($query);

       $profile = $result->fetch_assoc();

       return $profile;
   }

   public function delete($id)
   {
       $query = "DELETE FROM  profile WHERE `id`=" . $id;

       $result = $this->mysqli->query($query);

       if ($result) {
           $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">User information has been deleted.</h2>';
       } else {
           $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to delete information. Please try again.</h2>';
       }

       header('location:index.php');
   }
}
