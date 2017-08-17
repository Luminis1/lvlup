<?php
header('Content-Type: application/json');
require 'connection.php';
echo $id;
$id = filter_input(INPUT_POST, 'id');
$sql = mysqli_query($test-> connection, "delete from products WHERE id = '{$id}'");
