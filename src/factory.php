<?php
abstract class TaxiDelivery
{
	abstract public function getCar(): TaxiCar;

	public function deliver(): string
	{
		$car = $this->getCar();
		$result = "Car model: " . $car->getModel() . " ";
		$result .= "Car price: " . $car->getPrice();
		return $result;
	}
}

class EconomyTaxi extends TaxiDelivery
{
	public function getCar(): TaxiCar
	{
		return new EconomyCar();
	}
}

class StandardTaxi extends TaxiDelivery
{
	public function getCar(): TaxiCar
	{
		return new StandardCar();
	}
}

class LuxTaxi extends TaxiDelivery
{
	public function getCar(): TaxiCar
	{
		return new LuxCar();
	}
}

interface TaxiCar
{
	public function getModel(): string;
	public function getPrice(): int;
}

class EconomyCar implements TaxiCar
{
	public function getModel(): string
	{
		return "Renault Logan";
	}

	public function getPrice(): int
	{
		return 100;
	}
}

class StandardCar implements TaxiCar
{
	public function getModel(): string
	{
		return "Volkswagen Passat";
	}

	public function getPrice(): int
	{
		return 200;
	}
}

class LuxCar implements TaxiCar
{
	public function getModel(): string
	{
		return "Tesla Model S";
	}

	public function getPrice(): int
	{
		return 500;
	}
}

$economTaxi = new EconomyTaxi();
$standardTaxi = new StandardTaxi();
$luxTaxi = new LuxTaxi();

echo '<pre>';
var_dump($economTaxi->getCar());
var_dump($standardTaxi->getCar());
var_dump($luxTaxi->getCar());
echo '</pre>';

echo $economTaxi->deliver();
echo '<br>';
echo $standardTaxi->deliver();
echo '<br>';
echo $luxTaxi->deliver();

