<?php
//листинг 3.33
class ShopProduct
{
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price=0;
	public function __construct(string $title,string $FirstName, string $mainName, float $price)
	{
		$this->title = $title;
		$this->producerFirstName=$FirstName;
		$this->producerMainName=$mainName;
		$this->price=$price;
	}

	//3.45
	public function setShopProduct(ShopProduct|null $product)
	{
		//действия с $product
	}
}
//листинг 3.34
// Не срабоатает!
//$product = new ShopProduct("название","Имя","Фамилия ", []);

//листинг 3,36