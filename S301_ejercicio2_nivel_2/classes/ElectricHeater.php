<?php

require_once 'S301_ejercicio2_nivel_2/classes/ElectricHeaterActions.php';
require_once 'S301_ejercicio2_nivel_2/classes/traitSwitch.php';

class ElectricHeater implements ElectricHeaterActions
{
    use turnOnOff;

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
