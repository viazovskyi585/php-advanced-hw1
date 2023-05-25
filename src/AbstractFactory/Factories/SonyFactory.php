<?php
namespace AbstractFactory\Factories;

use AbstractFactory\Classes\SonyLCD;
use AbstractFactory\Classes\SonyLED;
use AbstractFactory\Interfaces\LCDTV;
use AbstractFactory\Interfaces\LEDTV;
use AbstractFactory\Interfaces\TVFactory;

class SonyFactory implements TVFactory
{
	public function createLED(): LEDTV
	{
		return new SonyLED();
	}

	public function createLCD(): LCDTV
	{
		return new SonyLCD();
	}
}
