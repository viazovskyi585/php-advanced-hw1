<?php
interface Formatter
{
	public function format(string $string): string;
}

class RawFormatter implements Formatter
{
	public function format(string $string): string
	{
		return $string;
	}
}

class WithDateFormatter implements Formatter
{
	public function format(string $string): string
	{
		return date('Y-m-d H:i:s') . $string;
	}
}

class WithDateAndDetailsFormatter implements Formatter
{
	public function format(string $string): string
	{
		return date('Y-m-d H:i:s') . $string . ' - With some details';
	}
}

interface Deliverer
{
	public function deliver(string $format): void;
}

class EmailDeliverer implements Deliverer
{
	public function deliver(string $format): void
	{
		echo "Вывод формата ({$format}) по имейл";
	}
}

class SmsDeliverer implements Deliverer
{
	public function deliver(string $format): void
	{
		echo "Вывод формата ({$format}) в смс";
	}
}

class ConsoleDeliverer implements Deliverer
{
	public function deliver(string $format): void
	{
		echo "Вывод формата ({$format}) в консоль";
	}
}

class Logger
{
	private Formatter $formatter;
	private Deliverer $deliverer;

	public function __construct(Formatter $formatter, Deliverer $deliverer)
	{
		$this->formatter = $formatter;
		$this->deliverer = $deliverer;
	}

	public function log(string $message): void
	{
		$formattedString = $this->formatter->format($message);
		$this->deliverer->deliver($formattedString);
	}
}

$logger = new Logger(new RawFormatter(), new SmsDeliverer());
$logger->log('Emergency error! Please fix me!');
