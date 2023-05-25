<?php

namespace AbstractFactory\Classes;
use AbstractFactory\Classes\LEDTV;

class SonyLED extends LEDTV
{
	public function playOnLED(): void
	{
		echo "Playing on Sony LED TV";
	}
}
