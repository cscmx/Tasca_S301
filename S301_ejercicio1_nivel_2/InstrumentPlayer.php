<?php

require_once 'S301_ejercicio1_nivel_2/CanPlay.php';

class InstrumentPlayer implements CanPlay
{
    public function play()
    {
        return 'playing instrument';
    }

}

?>