<?php
namespace AbstractFactory\Interfaces;
use AbstractFactory\Interfaces\TV;

interface TVFactory
{
	public function createTV(): TV;
}
