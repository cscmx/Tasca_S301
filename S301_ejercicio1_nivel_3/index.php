<?php

include('classes/Ghost.php');
include('classes/Fighter.php');

function doCombat(Character $character)
{
    $character->move();
    if ($character == new Fighter)
        {
            $character->attack(); 
        }
    
}

$ghost = new Ghost();
doCombat($ghost);

$fighter = new Fighter();
doCombat($fighter); 
