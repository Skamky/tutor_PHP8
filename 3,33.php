<?php

//листинг 3.33
class ShopProduct
{
	//листинг 3.52
	public $numPages;
	public $playLength;
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price = 0;

	public function __construct(string $title, string $FirstName, string $mainName, float $price, int $numPAges = 0, int $playLength = 0)
	{
		$this->title = $title;
		$this->producerFirstName = $FirstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
		$this->numPages = $numPAges;
		$this->playLength = $playLength;
	}

	public function getNumberOfPages(): int
	{
		return $this->numPages;
	}

	public function getProducer(): string
	{
		return $this->producerFirstName . " " . $this->producerMainName;
	}

	//3.46
	public function setShopProduct(ShopProduct|false $product)
	{
		//действия с $product
	}

	//3.48
	public function getPlayLength(): int
	{
		return $this->playLength;
	}

	// 3.49
	public function getPrice(): int|float
	{
		return ($this->price - $this->discount);
	}

	// 3.50
	public function srtDiscount(int|float $num): void
	{
		$this->discount = $num;
	}

	//3,53
	public function getSummaryLine(): string
	{
		$base = "{$this->title} ({$this->producerMainName}, ";
		$base .= "{$this->producerFirstName}";
		if ($this->type == 'book') {
			$base .= ":{$this->numPages} стр";
		} elseif ($this->type == 'cd') {
			$base .= ": Время звучания - {$this->playLength}";
		}
		return $base;
	}
}

//листинг 3.34
// Не срабоатает!
//$product = new ShopProduct("название","Имя","Фамилия ", []);

//листинг 3,36

//листинг 3.51
$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99);
$product2 = new ShopProduct("Классическая музыка. Лучшее", "Антонио", "Вивальди", 10.99);

print "Автор: " . $product1->getProducer() . "\n";
print "Композитор: " . $product1->getProducer() . "\n";

