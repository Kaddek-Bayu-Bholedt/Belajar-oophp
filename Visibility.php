<?php

require_once "data/Product.php";

$product = new Product("Asus", 1000000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$product->getInfo();

$dummy = new ProductDummy("Lenovo", 1000000);

$dummy->getInfo();
$dummy->getParentInfo();
