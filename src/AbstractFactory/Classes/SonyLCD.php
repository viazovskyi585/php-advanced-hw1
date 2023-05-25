<?php

namespace AbstractFactory\Classes;
use AbstractFactory\Classes\LCDTV;

class SonyLCD extends LCDTV
{
	public function playOnLCD(): void
	{
		echo "Playing on Sony LCD TV";
	}
}
