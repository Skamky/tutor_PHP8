<?php

//литсинг  3.1
class  ShopProduct
{
	// лисинг 3.4
	public $title = "Стандартный товар";
	public $producerMainName = "Фамилия автора";
	public $producerFirstName = "Имя автора";
	public $price = 0;
}

//листинг 3.2
$product1 = new ShopProduct();
$product2 = new ShopProduct();

//// листинг 3.3
//var_dump($product1);
//var_dump($product2);

// листинг 3.5
$product1 = new ShopProduct();
print $product1->title;

// листинг 3.6
$product1 = new ShopProduct();
$product2 = new ShopProduct();

$product1->title = "Собачье сердце";
$product2->title = "Ревизор";
?>