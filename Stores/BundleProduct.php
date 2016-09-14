<?php

require_once "autoload.php";

class BundleProduct  extends Product
{
	protected $products;
	public function __construct($name, $quantity)
	{
		parent:: __construct($name, 0, $quantity);
		$this->products = [];
	}
	
	public function addProduct(Product $value)
	{
		$this->products[] = $value;
	}
	public function getProduct()
	{
		return $this->products;
	}
	public function allPrice()
	{
		for($i = 0; $i <count($this->products);$i++) {
			$this->price += $this->products[$i]->allPrice();
		}
		return $this->price;
	}
}