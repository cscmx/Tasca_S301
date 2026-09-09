<?php
require_once 'S301_ejercicio1_nivel_2/InstrumentPlayer.php';
require_once 'S301_ejercicio1_nivel_2/guitar.php';
require_once 'S301_ejercicio1_nivel_2/piano.php';
require_once 'S301_ejercicio1_nivel_2/drums.php';

$guitar = new Guitar();
$piano = new Piano();
$drums = new Drums();

$instruments = [$guitar,$piano,$drums];

foreach($instruments as $instrument)
    {
        echo $instrument->play();
    }



?>