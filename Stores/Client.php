<?php

class Client
{   
	protected $name;
	protected $kesh;
	protected $basket = [];
	
	public function __construct($name,$kesh)
	{
		$this->name = $name;
		$this->kesh = $kesh;
	}
	
	public function addProductBasket(Product $value)
	{
		$this->basket[] = $value;
	}
	
	public function getBasket()
	{
		return $this->basket;
	}
	
	public function getKesh()
	{
		return $this->kesh;
	}
	
	public function setKesh($value)
	{
		return $this->kesh = $value;
	}
	
	public function getName()
	{
		return $this->name;
	}
}