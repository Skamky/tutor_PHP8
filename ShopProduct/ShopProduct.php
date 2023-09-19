<?php
namespace ShopProduct;
//листинг 3.74
class ShopProduct
{

	public int|float $discount;

	public function __construct(private string $title,
								private string $producerFirstName,
								private string $producerMainName,
								protected int|float $price,)
	{
	}

	/**
	 * @return string
	 */
	public function getProducerFirstName(): string
	{
		return $this->producerFirstName;
	}

	/**
	 * @return string
	 */
	public function getProducerMainName(): string
	{
		return $this->producerMainName;
	}

	public function setDiscount(int|float $num): void
	{
		$this->discount = $num;
	}

	/**
	 * @return float|int
	 */
	public function getDiscount(): float|int
	{
		return $this->discount;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	public function getPrice(): int|float
	{
		return ($this->price - $this->discount);
	}

	public function getProducer(): string
	{
		return $this->producerFirstName . " " . $this->producerMainName;
	}


	public function getSummaryLine(): string
	{
		$base = "{$this->title} ({$this->producerMainName}, ";
		$base .= "{$this->producerFirstName}";
		return $base;
	}
}

