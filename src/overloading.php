<?php
class User
{
	private string $name;
	private int $age;
	private string $email = 'default@example.com';

	private function setName(string $name)
	{
		$this->name = $name;
	}

	private function setAge(int $age)
	{
		$this->age = $age;
	}

	public function getAll(): string
	{
		return "Name: {$this->name}, Age: {$this->age}, Email: {$this->email}";
	}

	public function __call($name, $arguments)
	{
		if (method_exists($this, $name)) {
			return $this->$name(...$arguments);
		}

		throw new Exception("Method \"{$name}\" not found");
	}
}

try {
	$user = new User();
	$user->setName('John');
	$user->setAge(30);
	$user->setEmail('email@example.com');
	echo $user->getAll();
} catch (Exception $e) {
	echo $e->getMessage();
}

echo '<br>';

try {
	$user = new User();
	$user->setName('Bob');
	$user->setAge(40);
	echo $user->getAll();
} catch (Exception $e) {
	echo $e->getMessage();
}
