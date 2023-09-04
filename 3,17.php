<?php
//3,17
class  ShopProduct
{
	//3,18
	public function __construct(
	public $title,
	public $producerMainName="",
	public $producerFirstName="",
	public $price=0
	){}
	public function getProducer()
	{
		return $this->producerFirstName . " " . $this->producerMainName;
	}
}
//листинг 3,20
$product1 = new ShopProduct("Каталог книг");
// листинг 3.21
$product1 = new ShopProduct( price: 0.7,title: "Каталог книг");



