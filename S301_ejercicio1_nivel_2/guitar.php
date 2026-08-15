<?php

require_once 'S301_ejercicio1_nivel_2/playInstrument.php';


class Guitar implements PlayInstrument
{
    public function play()
    {
        return "🎸 Strumming the guitar\n";
    }

}
?>