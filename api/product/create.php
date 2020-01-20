<?php
include_once '../config/database.php';
include_once '../objects/product.php';

$db = new Database();
$db_connection = $db->getConnection();
$Product = new Product($db_connection);
$Product->create();
