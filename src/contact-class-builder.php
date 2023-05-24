<?php
class ContactB {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;
    
    public function __construct($name, $surname, $email, $phone, $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }
}

class ContactBuilder
{
	private string $name;
	private string $surname;
	private string $email;
	private string $phone;
	private string $address;
	
	public function name($name)
	{
		$this->name = $name;
		return $this;
	}
	
	public function surname($surname)
	{
		$this->surname = $surname;
		return $this;
	}
	
	public function email($email)
	{
		$this->email = $email;
		return $this;
	}
	
	public function phone($phone)
	{
		$this->phone = $phone;
		return $this;
	}
	
	public function address($address)
	{
		$this->address = $address;
		return $this;
	}
	
	public function build(): ContactB
	{
		return new ContactB($this->name, $this->surname, $this->email, $this->phone, $this->address);
	}
}

$contactBuilder = new ContactBuilder();
$contact = $contactBuilder
	->name("John")
	->surname("Surname")
	->email("email@example.com")
	->phone("000-555-000")
	->address("Some address")
	->build();

echo '<pre>';
var_dump($contact);
echo '</pre>';
