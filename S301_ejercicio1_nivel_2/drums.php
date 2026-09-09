<?php

require_once 'S301_ejercicio1_nivel_2/CanPlay.php';

class Drums implements CanPlay
{
    public function play()
    {
        return "🥁 Beating the drums\n";
    }

}
?>