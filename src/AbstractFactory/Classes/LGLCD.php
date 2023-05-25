<?php

namespace AbstractFactory\Classes;
use AbstractFactory\Classes\LCDTV;

class LGLCD extends LCDTV
{
	public function playOnLCD(): void
	{
		echo "Playing on LG LCD TV";
	}
}
