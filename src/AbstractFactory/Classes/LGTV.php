<?php

namespace AbstractFactory\Classes;
use AbstractFactory\Interfaces\TV;

class LGTV implements TV
{
	public function play()
	{
		echo "Playing on LG TV\n";
	}
}
