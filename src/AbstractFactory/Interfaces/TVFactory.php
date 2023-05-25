<?php
namespace AbstractFactory\Interfaces;


interface TVFactory
{
	public function createLED(): LEDTV;
	public function createLCD(): LCDTV;
}
