<?php
class Product
{
	public function get($name) {}
	public function set($name, $value) {}
}

class ProductHandler
{
	public function __construct(private Product $product) {}
	public function save() {}
	public function update() {}
	public function delete() {}
}

class ProductPrinter
{
	public function __construct(private Product $product) {}
	public function show() {}
	public function print() {}
}

$product = new Product();

$productHandler = new ProductHandler($product);

$productPrinter = new ProductPrinter($product);

echo '<pre>';
var_dump($productHandler);
var_dump($productPrinter);
echo '</pre>';
