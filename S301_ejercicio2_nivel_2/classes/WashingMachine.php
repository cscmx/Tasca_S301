<?php

require_once 'S301_ejercicio2_nivel_2/classes/CanWash.php';
require_once 'S301_ejercicio2_nivel_2/classes/SwitchingOnOff.php';


class WashingMachine implements CanWash, SwitchingOnOff
{

    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }

}
