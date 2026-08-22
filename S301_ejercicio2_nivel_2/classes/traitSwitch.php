<?php

require_once 'S301_ejercicio2_nivel_2/classes/interfaceSwitchOnOff.php';

trait turnOnOff
{
  public function turnOn()
  {
    return "turn On";
  }
  
  public function turnOff()
  {
    return "turn Off";
  }

}
