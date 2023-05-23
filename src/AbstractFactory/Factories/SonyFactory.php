<?php
namespace AbstractFactory\Factories;
use AbstractFactory\Interfaces\TVFactory;
use AbstractFactory\Interfaces\TV;
use AbstractFactory\Classes\SonyTV;

class SonyFactory implements TVFactory
{
	public function createTV(): TV
	{
		return new SonyTV();
	}
}
