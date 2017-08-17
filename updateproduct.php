<?php

header('Content-Type: application/json');

require 'connection.php';

$id = filter_input(INPUT_POST, 'id');

$sql = mysqli_query($test->connection, "update * from products set title = '{$title}', '{$price}', '{$description}'");

//class updateProduct
//{
//    public static $instance;
//
//
//    public static function getUpdateProduct($id)
//    {
//        if(self::$instance == null)
//        {
//            self::$instance = new self($id);
//        }
//        return self::$instance;
//    }
//
//    private function __construct($id)
//    {
//        $test = connection::getConnection();
//        $id = filter_input(INPUT_POST, 'id')
//        $sql = mysqli_query($test-> connection,"update * from products set title = '{$this-> title}', '{$this-> price}', '{$this-> description}'where id = $this->id");
//
//    }
//
//}