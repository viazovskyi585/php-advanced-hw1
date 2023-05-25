<?php
namespace AbstractFactory\Classes;

use AbstractFactory\Interfaces\LCDTV as InterfaceLCDTV;
use AbstractFactory\Interfaces\TV;

abstract class LCDTV implements InterfaceLCDTV
{
	abstract public function playOnLCD(): void;

	public function play(): void {
		$this->playOnLCD();
	}
}
