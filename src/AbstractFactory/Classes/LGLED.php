<?php

namespace AbstractFactory\Classes;
use AbstractFactory\Classes\LEDTV;

class LGLED extends LEDTV
{
	public function playOnLED(): void
	{
		echo "Playing on LG LED TV";
	}
}
