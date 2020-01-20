<?php
$db = new Database();
$db->getConnection();
$product = new Product($db);
$result = $product->read();
echo $result;