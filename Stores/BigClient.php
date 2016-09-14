<?php

require_once 'autoload.php';

class BigClient extends Client
{
	public function __construct($name, $kesh)
	{
		parent::__construct($name, $kesh);
	}
}