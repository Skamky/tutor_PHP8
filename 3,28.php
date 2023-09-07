<?php
include "3,17.php";
//листинг 3.28
class ShopProductWriter
{
	//листинг 3.30
	public function write(ShopProduct $shopProduct)
	{
		$str = $shopProduct->title.": ".$shopProduct->getProducer()." (".$shopProduct->price. ")\n";
		print $str;
	}
}
//Листнг 3.29
$product1 = new ShopProduct("Собачье сердце","Михаил", "Булгаков",5.99);
$writer = new ShopProductWriter();
$writer->write($product1);
