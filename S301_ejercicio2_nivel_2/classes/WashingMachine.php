<?php

require_once 'S301_ejercicio2_nivel_2/classes/WashingMachineActions.php';
require_once 'S301_ejercicio2_nivel_2/classes/traitSwitch.php';

class WashingMachine implements WashingMachineActions
{
    use turnOnOff;

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
