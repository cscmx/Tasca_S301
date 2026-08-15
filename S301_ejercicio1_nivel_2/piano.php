<?php

require_once 'S301_ejercicio1_nivel_2/playInstrument.php';

class Piano implements PlayInstrument
{
    public function play()
    {
        return "🎹 Playing the piano\n";
    }

}
?>