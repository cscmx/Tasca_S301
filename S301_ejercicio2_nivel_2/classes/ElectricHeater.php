<?php

require_once 'S301_ejercicio2_nivel_2/classes/CanHeat.php';
require_once 'S301_ejercicio2_nivel_2/classes/SwitchingOnOff.php';

class ElectricHeater implements SwitchingOnOff, CanHeat
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }

}
