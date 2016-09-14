<?php

require_once "autoload.php";
class Cases
{
	protected $factory;
	protected $keshesh;
	protected $factories;
	protected $name;

	public function __construct($name) 
	{
		$this->name  = $name;
		$this->factories = [];
	
	}
	public function getFactories()
	{
		return $this->factories;
	}
	
	public function getFactory()
	{
		return $this->factory;
	}
	
	public function getKeshesh()
	{
		return $this->keshesh;
	}
	public function setKeshesh($value)
	{
		return $this->keshesh = $value;
	}
	public function setFactory($value)
	{
		return $this->factory =$value;
	}
	
	public function getName()
	{
		return $this->name;
	}
	public function setFactories($value)
	{
		return $this->factories[] =$value;
	}
	
	public function kesh(Client $client)
	{
		$sumForPaid = 0;
		 $array = [];
		 $array = $client->getBasket();
		  for($i = 0; $i<count($array);$i++) {
		  	  $sumForPaid += $array[$i]->allPrice();
		  }
		     if ($client->getKesh() >= $sumForPaid) {
		          if ($client instanceof  Client) {
		          	$this->setKeshesh($this->getKeshesh()+ $sumForPaid);
		          	echo "sussess paid";
		          }
		          if($client instanceof  BigClient) {
		          	$this->setFactory($this->getFactory()+ $sumForPaid);
		          	$this->makeFactory($client, $sumForPaid);
		          	echo "sussess paid make factory just a moment pls...";
		          }
		     } else {
		     	echo "cannot paid sorry...";
		     }
	}
	private function makeFactory(Client $client,$sum)
	{
		$str ="name:". $client->getName()."  kesh:".$sum;
		$this->setFactories($str);
	}
	
}   
