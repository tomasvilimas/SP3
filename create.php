<?php
require_once "bootstrap.php";

$newProductName = $argv[1];

$product = new projektas();
$product->setName($newProductName);
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
