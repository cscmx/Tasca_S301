<?php

require_once 'S301_ejercicio1_nivel_2/CanPlay.php';

class Piano implements CanPlay
{
    public function play()
    {
        return "🎹 Playing the piano\n";
    }

}
?>