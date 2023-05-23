<?php
require_once __DIR__ . "/vendor/autoload.php";

use AbstractFactory\Factories\LGFactory;
use AbstractFactory\Factories\SonyFactory;

$lgFactory = new LGFactory();
$lgTV = $lgFactory->createTV();
$lgTV->play();

$sonyFactory = new SonyFactory();
$sonyTV = $sonyFactory->createTV();
$sonyTV->play();
