<?php
include "3,17.php";
//листинг 3.28
class ShopProductWriter
{
	//листинг 3.30
	// Листинг 5.56
	public function write($shopProduct):void
	{
		if ((!$shopProduct instanceof CDProduct)&&
		!($shopProduct instanceof BookProduct))
		{die("Передан неверный тип данных");}
		$str = $shopProduct->title.": ".$shopProduct->getProducer()." (".$shopProduct->price. ")\n";
		print $str;
	}
}
//Листнг 3.29
$product1 = new ShopProduct("Собачье сердце","Михаил", "Булгаков",5.99);
$writer = new ShopProductWriter();
$writer->write($product1);
