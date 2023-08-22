<?php

//литсинг  3.1
class  ShopProduct
{
	// лисинг 3.15 (дописать)
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price = 0;

	// листинг 3.13
	public function getProducer()
	{
		return $this->producerFirstName . " " . $this->producerMainName;
	}
}


?>