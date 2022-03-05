<?php

namespace App\Mobile;

use mysqli;

class Mobile
{
    public $mysqli;
    public $brand;
    public $model;
    public $imei;
    public $date;

    public function __construct()
    {
        //Connect with DB by Hostname, Username, Password, DB name
        $this->mysqli = new mysqli('localhost', 'root', '', 'atomic_projects');

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    public function prepare($data = array())
    {
        // $arr = array('name' => 'sumon', 'city' => 'Dhaka');

        if (array_key_exists('brand', $data)) {
            $this->brand = $data['brand'];
        }

        if (array_key_exists('model', $data)) {
            $this->model = $data['model'];
        }

        if (array_key_exists('imei', $data)) {
            $this->imei = $data['imei'];
        }

        if (array_key_exists('date', $data)) {
            $this->date = $data['date'];
        }
    }

    public function store()
    {
        $query = "INSERT INTO `mobile`( `brand`, `model`, `imei`, `date_of_purchase`) VALUES ('". $this->brand. "','". $this->model ."','".$this->imei."','".$this->date."')";


        $result = $this->mysqli->query($query);

        if($result) {
            $_SESSION['message'] = '<h2 style="text-align:center; color:green; margin-bottom:10px">Your mobile information has been saved successfully</h2>';
        } else {
            $_SESSION['message'] = '<h2 style="text-align:center; color:red; margin-bottom:10px">Oops! Something wrong to save your mobile information. Please try again.</h2>';
        }

        header('location:create.php');
    }

    public function index()
    {
        $query = "SELECT * FROM  mobile";

        $result = $this->mysqli->query($query);

        $mobiles = $result->fetch_all(MYSQLI_ASSOC);

        return $mobiles;
    }

    public function show($id)
    {
        $query = "SELECT * FROM  mobile WHERE `id`=".$id;

        $result = $this->mysqli->query($query);

        $mobile = $result->fetch_assoc();

        return $mobile;
    }
}

