<?php


class CustomMessageException extends Exception
{
	public function getCustomMessage(): string
	{
		return "Error: " . $this->getMessage() . ' | ' . "File: " . $this->getFile() . ' | ' . "Line: " . $this->getLine();
	}
}

class PasswordToLongException extends CustomMessageException
{
	public function __construct()
	{
		parent::__construct("Password is too long");
	}
}

class UserIdTypeException extends CustomMessageException
{
	public function __construct()
	{
		parent::__construct("User id must be an integer");
	}
}

class User
{
	private int $id;
	private string $password;

	public function __construct($id, string $password)
	{
		$this->setId($id);
		$this->setPassword($password);
	}

	private function setId($id): void
	{
		if (!is_int($id)) {
			throw new UserIdTypeException();
		}

		$this->id = $id;
	}

	private function setPassword(string $password): void
	{
		if (strlen($password) > 8) {
			throw new PasswordToLongException();
		}

		$this->password = $password;
	}
}

try {
	$user = new User(1, "123456789");
} catch (CustomMessageException $e) {
	echo $e->getCustomMessage();
}

echo '<br>';

try {
	$user = new User("user", "1234");
	var_dump($user);
} catch (CustomMessageException $e) {
	echo $e->getCustomMessage();
}

echo '<br>';

try {
	$user = new User(1, "1234");
	var_dump($user);
} catch (CustomMessageException $e) {
	echo $e->getCustomMessage();
}
