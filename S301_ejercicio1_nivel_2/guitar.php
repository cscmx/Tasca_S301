<?php

require_once 'S301_ejercicio1_nivel_2/CanPlay.php';


class Guitar implements CanPlay
{
    public function play()
    {
        return "🎸 Strumming the guitar\n";
    }

}
?>