<?php
namespace AbstractFactory\Factories;

use AbstractFactory\Classes\LGLCD;
use AbstractFactory\Classes\LGLED;
use AbstractFactory\Interfaces\LCDTV;
use AbstractFactory\Interfaces\LEDTV;
use AbstractFactory\Interfaces\TVFactory;
use AbstractFactory\Interfaces\TV;

class LGFactory implements TVFactory
{
	public function createLED(): LEDTV
	{
		return new LGLED();
	}

	public function createLCD(): LCDTV
	{
		return new LGLCD();
	}
}
