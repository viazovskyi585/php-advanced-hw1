<?php
interface canEat
{
	public function eat();
}

interface canFly
{
	public function fly();
}

class Swallow implements canEat, canFly
{
	public function eat() { echo 'eat'; }
	public function fly() { echo 'fly'; }
}

class Ostrich implements canEat
{
	public function eat() { echo 'eat'; }
}

$swallow = new Swallow();
$ostrich = new Ostrich();
