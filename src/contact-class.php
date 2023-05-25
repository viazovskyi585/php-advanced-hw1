<?php
class Contact
{
	private string $phone;
	private string $name;
	private string $surname;
	private string $email;
	private string $address;

	public function __call($name, $arguments)
	{
		if (property_exists($this, $name)) {
			$this->$name = $arguments[0];
		} else {
			throw new Exception("Method $name does not exist");
		}
		return $this;
	}

	public function build()
	{
		return "Contact: $this->name $this->surname $this->email $this->phone $this->address";
	}
}

$contact = new Contact();
$contactString = $contact->phone('000-555-000')
	->name("John")
	->surname("Surname")
	->email("email@example.com")
	->address("Some address")
	->build();

echo $contactString;
