<?php

spl_autoload_register(function ($class) {
	include_once __DIR__ . '/Classes/' . str_replace('\\', '/', $class) . '.php';
});

$three = new Three();
