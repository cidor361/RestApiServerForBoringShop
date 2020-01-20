<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../objects/product.php';

$db = new Database();
$db_connection = $db->getConnection();
$Product = new Product($db_connection);
$result = $Product->read();
$resOutput = pg_fetch_all($result);
if ($resOutput==null){
    echo 'full null';
}else {
    echo json_encode($resOutput);
}