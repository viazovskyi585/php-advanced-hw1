<?php

namespace AbstractFactory\Classes;
use AbstractFactory\Interfaces\TV;

class SonyTV implements TV
{
	public function play()
	{
		echo "Playing on Sony TV\n";
	}
}
