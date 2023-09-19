<?php
namespace ShopProduct;

//3.55
class BookProduct extends ShopProduct
{

	public function __construct(string $title,
								string $firstName,
								string $mainName,
								int|float $price,
								private int $numPages)
	{
		parent::__construct($title,$firstName,$mainName,$price);
	}

	public function getNumPages(): int
	{
		return $this->numPages;
	}
	public function getSummaryLine(): string
	{
		$base= parent::getSummaryLine();
		$base .= ": {$this->numPages} стр.";

		return $base;
	}
	public function getPrice(): int|float
	{
		return $this->price;
	}
}