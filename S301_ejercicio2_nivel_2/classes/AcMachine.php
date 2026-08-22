<?php
require_once 'S301_ejercicio2_nivel_2/classes/AcMachineActions.php';
require_once 'S301_ejercicio2_nivel_2/classes/traitSwitch.php';

class AcMachine implements AcMachineActions
{
    use turnOnOff;

    public function turnOn(): void
    {
        echo "A/C machine on\n";
    }

    public function turnOff(): void
    {
        echo "A/C machine off\n";
    }

    public function cool(): void
    {
        echo "A/C cooling\n";

    }

}
