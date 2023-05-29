<?php
require_once __DIR__ . "/vendor/autoload.php";

use AbstractFactory\Factories\LGFactory;
use AbstractFactory\Factories\SonyFactory;

$lgFactory = new LGFactory();
$sonyFactory = new SonyFactory();

$lgLCD = $lgFactory->createLCD();
$lgLCD->play();
echo "<br>";

$lgLED = $lgFactory->createLED();
$lgLED->play();
echo "<br>";

$sonyLED = $sonyFactory->createLED();
$sonyLED->play();
echo "<br>";

$sonyLCD = $sonyFactory->createLCD();
$sonyLCD->play();
echo "<br>";
