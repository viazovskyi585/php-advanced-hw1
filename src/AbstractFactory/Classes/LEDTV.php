<?php
namespace AbstractFactory\Classes;

use AbstractFactory\Interfaces\LEDTV as InterfaceLEDTV;

abstract class LEDTV implements InterfaceLEDTV
{
	abstract public function playOnLED(): void;

	public function play(): void {
		$this->playOnLED();
	}
}
