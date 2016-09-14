<?php

require_once 'autoload.php';
class Store
{   
	private $case ;
	private $sklad;
	private $name;
	protected static $instance;
	
	public function __clone(){}
	
	private function __construct($name)
	{
		$this->name = $name;
		$this->case = [];
	}
	
	public function getInstance($name)
	{
		if(is_null (self::$instance)){
			return  self::$instance = new self($name);
		}
		return self::$instance;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function addCases (Cases $value)
	{
		$this->case[] = $value;
	}
	public function getCases()
	{
		return $this->case;
	}
	
	public function makeKesh(Client $client,$number)
	{
		$this->case[$number]->kesh($client);
	}
	public function makeReviziq() 
	{
		
		echo PHP_EOL. "----factory: ". " kesh:"." all:".PHP_EOL;
		for($i = 0; $i<count($this->case);$i++){
		echo  $this->case[$i]->getName(). " -". "-".$this->case[$i]->getKeshesh()."- "
				.$this->case[0]->getFactory(). "-".
				($this->case[$i]->getKeshesh()+$this->case[$i]->getFactory()).PHP_EOL;
	}

	}
}