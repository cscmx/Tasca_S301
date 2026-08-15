<?php

require_once 'S301_ejercicio1_nivel_2/guitar.php';
require_once 'S301_ejercicio1_nivel_2/piano.php';
require_once 'S301_ejercicio1_nivel_2/drums.php';

$guitar = new Guitar();
echo $guitar->play().PHP_EOL;

$piano = new Piano();
echo $piano->play().PHP_EOL;

$drums = new Drums();
echo $drums->play().PHP_EOL;

?>