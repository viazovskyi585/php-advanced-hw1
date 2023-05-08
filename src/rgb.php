<?php

class RGBColor
{
	private int $red = 0;
	private int $green = 0;
	private int $blue = 0;

	public function __construct(int $red, int $green, int $blue)
	{
		$this->setRed($red);
		$this->setGreen($green);
		$this->setBlue($blue);
	}

	private function validateColorValue(int $value): int
	{
		if ($value < 0 || $value > 255) {
			throw new InvalidArgumentException("Color value must be between 0 and 255");
		}
		return $value;
	}

	public function getRed(): int
	{
		return $this->red;
	}

	private function setRed(int $red): void
	{
		$this->red = $this->validateColorValue($red);
	}

	public function getGreen(): int
	{
		return $this->green;
	}

	private function setGreen(int $green): void
	{
		$this->green = $this->validateColorValue($green);
	}

	public function getBlue(): int
	{
		return $this->blue;
	}

	private function setBlue(int $blue): void
	{
		$this->blue = $this->validateColorValue($blue);
	}

	public static function compare(RGBColor $color1, RGBColor $color2): bool
	{
		return $color1->getRed() === $color2->getRed() &&
			$color1->getGreen() === $color2->getGreen() &&
			$color1->getBlue() === $color2->getBlue();
	}

	public function equals(RGBColor $color): bool
	{
		return self::compare($this, $color);
	}

	public static function random(): RGBColor
	{
		return new RGBColor(
			random_int(0, 255),
			random_int(0, 255),
			random_int(0, 255)
		);
	}

	public function mix(RGBColor $color): RGBColor
	{
		return new RGBColor(
			intval(($this->getRed() + $color->getRed()) / 2),
			intval(($this->getGreen() + $color->getGreen()) / 2),
			intval(($this->getBlue() + $color->getBlue()) / 2)
		);
	}

}

?>

<pre>
<?php
var_dump(new RGBColor(255, 0, 0));

echo "<hr>";

try {
	new RGBColor(256, 0, 0);
} catch (Exception $e) {
	echo $e->getMessage();
}

echo "<hr>";

$red = new RGBColor(255, 0, 0);
$green = new RGBColor(0, 255, 0);
echo "green == red: ";
var_dump($red->equals($green));

echo "green == (0, 255, 0): ";
var_dump($green->equals(new RGBColor(0, 255, 0)));

echo "<hr>";

echo "Random color: ";
$random_color = RGBColor::random();
$r = $random_color->getRed();
$g = $random_color->getGreen();
$b = $random_color->getBlue();

echo "<div style='width: 40px; height: 40px; background-color: rgb($r, $g, $b);'></div>";

echo "<hr>";

echo "Mixing red and green: ";
$mix = $red->mix($green);
var_dump($mix);

?>
</pre>
