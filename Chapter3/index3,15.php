<?php

//литсинг  3.1
namespace Chapter3;
class  ShopProduct_1
{
	// лисинг 3.15 (дописать)
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price = 0;

	public function __construct($title, $firstName, $mainName, $price)
	{
		$this->title             = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName  = $mainName;
		$this->price             = $price;
	}

	// листинг 3.13
	public function getProducer()
	{
		return $this->producerFirstName . " " . $this->producerMainName;
	}
}

//листинг 3.16
$product = new ShopProduct_1("Собачье сердце", "Михаил", "Булгаков", 5.99);
print "Автор: {$product->getProducer()}\n";


?>