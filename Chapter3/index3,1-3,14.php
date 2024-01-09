<?php

//литсинг  3.1
namespace Chapter3;
class  ShopProduct_0
{
	// лисинг 3.4
	public $title = "Стандартный товар";
	public $producerMainName = "Фамилия автора";
	public $producerFirstName = "Имя автора";
	public $price = 0;

	// листинг 3.13
	public function getProducer()
	{
		return $this->producerFirstName . " " . $this->producerMainName;
	}
}

//листинг 3.2
$product1 = new ShopProduct_0();
$product2 = new ShopProduct_0();

//// листинг 3.3
//var_dump($product1);
//var_dump($product2);

// листинг 3.5
$product1 = new ShopProduct_0();
print $product1->title;

// листинг 3.6
$product1 = new ShopProduct_0();
$product2 = new ShopProduct_0();

$product1->title = "Собачье сердце";
$product2->title = "Ревизор";

// листинг 3.7 (счиатаеться плохим кодом)
$product1->arbitrayAddition = "Дополнительный параметр";

//листинг 3.14
$product1                    = new ShopProduct_0();
$product1->title             = 'Собачье сердце';
$product1->producerMainName  = "Булгаков";
$product1->producerFirstName = "Михаил";
$product1->price             = 5.99;

print "\n\nАвтор: {$product1->getProducer()}\n"
?>