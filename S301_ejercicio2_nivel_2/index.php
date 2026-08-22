<?php

require_once 'classes/ElectricHeater.php';
require_once 'classes/WashingMachine.php';
require_once 'classes/AcMachine.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();
$ac = new AcMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();

echo "\n";

$washer->turnOn();
$washer->wash();
$washer->turnOff();

echo "\n";

$ac->turnOn();
$ac->cool();
$ac->turnOff();


?>