<?php
require 'connection.php';
require 'addnewproduct.php';
require 'getProduct.php';

$rid = filter_input(INPUT_POST, 'id1');
$rid = filter_input(INPUT_GET, 'id1');
$id = filter_input(INPUT_POST, 'id');
$id = filter_input(INPUT_GET, 'id');


$title = filter_input(INPUT_POST, 'title');
$price = filter_input(INPUT_POST, 'price');
$description = filter_input(INPUT_POST, 'description');


switch ($rid)
{
    case 1:
        $getProduct = getproduct::getGetProduct($id);
    echo json_encode($getProduct->products);
        break;

    case 2:
        echo 1;
        $addNewProduct = addnewproduct::getUpdateProduct($id,$title,$price, $description);
//            $getProduct = getproduct::getGetProduct($id);
            var_dump($addNewProduct);
        echo json_encode($getProduct->products);
        break;

}
