<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../objects/product.php';

$db = new Database();
$db->getConnection();
$Product = new Product($db);
$result = $Product->read();
if ($result==null){
    echo 'null';
}else {
    echo $result;
}