<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../objects/product.php';

$db = new Database();
$db_connection = $db->getConnection();
$Product = new Product($db_connection);
$result = $Product->read();
if ($result==null){
    echo 'full null';
}else {
    echo $result;
}