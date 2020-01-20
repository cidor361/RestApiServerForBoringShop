<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../objects/product.php';

$num = $_POST['num'];
echo var_dump($num);

$db = new Database();
$db_connection = $db->getConnection();
$Product = new Product($db_connection);
$result = $Product->read();
$resOutput = pg_fetch_all($result);
if ($resOutput==null){
    echo 'full null';
}else {
    echo json_encode($resOutput, JSON_UNESCAPED_UNICODE)[0];
}