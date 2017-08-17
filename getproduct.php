<?php
//
//header('Content-Type: application/json');
//

//
//$id = filter_input(INPUT_GET, 'id');
//
//$sql = 'select * from products';
//
//if (!empty($id)){
//
//    $sql .= " where id = {$id}";
//}
//
//if (!$query = mysqli_query($test-> connection, $sql)) {
//    echo json_encode(['status' => 'ok', 'msg' => 'Query fail']);
//    exit();
//
//
//
//}
//$products = [];
//while($row = mysqli_fetch_assoc($query)){
//    $products[] = $row;
//}
//echo json_encode($products);

class getproduct
{
    public static $instance = NULL;
    public $sql = 'select * from products';
    public $products;

    public static function getGetProduct($id)
    {
        if (self::$instance == null) {
            self::$instance = new self($id);
        }
        return self::$instance;
    }

    private function __construct($id)
    {
        $test = connection::getConnection();

        if (!empty($id)) {

            $this-> sql .= " where id = {$id}";
        }

        if (!$query = mysqli_query($test->connection, $this-> sql)) {
            echo json_encode(['status' => 'ok', 'msg' => 'Query fail']);
            exit();
        }
        else {
            $products = [];
            while ($row = mysqli_fetch_assoc($query)) {
                $products[] = $row;
            }
            $this-> products = $products;
        }
    }
    private function __clone(){}
}