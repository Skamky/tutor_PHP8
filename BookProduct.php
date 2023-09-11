<?php
//3.55
class BookProduct
{
	public $numPages;
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price = 0;

	public function __construct(string $title, string $FirstName, string $mainName, float $price,  int $numPages)
	{
		$this->title = $title;
		$this->producerFirstName = $FirstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
		$this->numPages = $numPages;
	}

	public function getNumPages(): int
	{
		return $this->numPages;
	}
	public function getSummaryLine(): string
	{
		$base = "{$this->title} ({$this->producerMainName}, ";
		$base .= "{$this->producerFirstName}";
		$base .= ": {$this->numPages} стр.";

		return $base;
	}
	public function getProducer(): string
	{
		return $this->producerFirstName . " " . $this->producerMainName;
	}
}