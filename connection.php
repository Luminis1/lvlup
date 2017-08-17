<?php
//public  $config = parse_ini_file('configs/db.ini');
//$config = parse_ini_file('configs/db.ini');
//if(is_array($config)){
//    $link = mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname']);
//    if(mysqli_connect_errno()){
//        echo 'connection failed' . mysqli_connect_error();
//        exit();
//    }
//}
class connection
{
    public static $instance = NULL;
    public $connection;

    private function __construct()
    {
        $config = parse_ini_file('configs/db.ini');
        if (is_array($config)) {
            $this->connection = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
            if ($this->connection->errno) {
                echo 'connection failed' . mysqli_connect_error();
                exit();
            }
        }
    }

    private function __clone()
    {
    }

    public static function getConnection()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}

$test = connection::getConnection();
//echo '<pre>';
//var_dump($test);