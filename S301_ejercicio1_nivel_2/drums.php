<?php

require_once 'S301_ejercicio1_nivel_2/playInstrument.php';

class Drums implements PlayInstrument
{
    public function play()
    {
        return "🥁 Beating the drums\n";
    }

}
?>