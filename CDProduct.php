<?php

// Листинг 3.54
class CDProduct
{
	public $playLength;
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price = 0;

	public function __construct(string $title, string $FirstName, string $mainName, float $price,  int $playLength)
	{
		$this->title = $title;
		$this->producerFirstName = $FirstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
		$this->playLength = $playLength;
	}

	public function getPlayLength(): int
	{
		return $this->playLength;
	}
	public function getSummaryLine(): string
	{
		$base = "{$this->title} ({$this->producerMainName}, ";
		$base .= "{$this->producerFirstName}";
		$base .= ": Время звучания - {$this->playLength}";

		return $base;
	}
	public function getProducer(): string
	{
		return $this->producerFirstName . " " . $this->producerMainName;
	}

}