<?php
namespace AbstractFactory\Factories;
use AbstractFactory\Interfaces\TVFactory;
use AbstractFactory\Interfaces\TV;
use AbstractFactory\Classes\LGTV;

class LGFactory implements TVFactory
{
	public function createTV(): TV
	{
		return new LGTV();
	}
}
