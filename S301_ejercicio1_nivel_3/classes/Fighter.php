<?php

require_once('Character.php');
require_once('S301_ejercicio1_nivel_3/classes/interfaceAttackActions.php');

class Fighter extends Character implements AttackActions
{
    public function attack(): void
    {
        echo "The character attacks with a sword.\n";
    }


}
