<?php
header('Content-Type: application/json');
//$id = filter_input(INPUT_POST, 'id');
//$title = filter_input(INPUT_POST, 'title');
//$price = filter_input(INPUT_POST, 'price');
//$description = filter_input(INPUT_POST, 'description');
//
//
//$title = mysqli_escape_string($test-> connection, $title);
//$price = mysqli_escape_string($test-> connection, $price);
//$description = mysqli_escape_string($test-> connection, $description);
//
//$sql = '';
//
//if(!empty($id)){
//    $sql = "UPDATE products SET title='{$title}', price = '{$price}', description = '{$description}' WHERE id = '{$id}'";
//}
//else{
//    $sql = "insert into products values (NULL,'{$title}', '{$price}','{$description}')";
//}
//
//if(!empty($title) && !empty($price) && !empty($description)){
//    if($query = mysqli_query($test-> connection, $sql)){
//
//        echo json_encode([ "status" => "ok", "msg" => "ok" ]);
//    }
//
//}
//else{
//    echo json_encode([ "status" => "error", "msg" => "fill the field!" ]);
//}

class addnewproduct
{
    public static $instance;


    public static function getUpdateProduct($id,$title,$price, $description)
    {
        if (self::$instance == null) {
            self::$instance = new self($id,$title,$price, $description);
        }
        return self::$instance;
    }

    private function __construct($id,$title,$price, $description)
    {
        $test = connection::getConnection();
        $id =  filter_input(INPUT_POST, 'id');
        $title = filter_input(INPUT_POST, 'title');
        $price = filter_input(INPUT_POST, 'price');
        $description = filter_input(INPUT_POST, 'description');

        $title = mysqli_escape_string($test-> connection, $title);
        $price = mysqli_escape_string($test-> connection, $price);
        $description = mysqli_escape_string($test-> connection, $description);
        var_dump($title);

        $sql = '';

        if(!empty($id)){
            $sql = "UPDATE products SET title='{$title}', price = '{$price}', description = '{$description}' WHERE id = '{$id}'";
        }
        else{
            $sql = "insert into products values (NULL,'{$title}', '{$price}','{$description}')";
        }

        if(!empty($title) && !empty($price) && !empty($description)){
            if($query = mysqli_query($test-> connection, $sql)){

                echo json_encode([ "status" => "ok", "msg" => "ok" ]);
            }

        }
        else{
            echo json_encode([ "status" => "error", "msg" => "fill the field!" ]);
        }


    }
}
