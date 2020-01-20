<?php
$db = new Database();
$product = new Product($db);
$result = $product->read();
echo $result;