<?php
require_once 'S301_ejercicio2_nivel_2/classes/CanCool.php';
require_once 'S301_ejercicio2_nivel_2/classes/SwitchingOnOff.php';

class AcMachine implements SwitchingOnOff,CanCool
{
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
