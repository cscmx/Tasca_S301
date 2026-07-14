<?php

require_once 'S301_ejercicio1_nivel_1/athlete.php';
require_once 'S301_ejercicio1_nivel_1/event.php';
require_once 'S301_ejercicio1_nivel_1/result.php';

class OlympicGames 
{

    private array $results;

    public function __construct(array $results)
    {
        $this->results = $results;
    }

    public function processOlympicData()
    {
        echo "Olympic Games Results:\n";

        foreach ($this->results as $result)
        {
            echo "Event: ". $result->getEvent()->getName(). " on ". $result->getEvent()->getDate().PHP_EOL;

            foreach ($this->results as $value)
            {   
                if ($result->getEvent()->getName() == $value->getEvent()->getName()){

                    echo "Athlete ". $value->getAthlete()->getName(). " from ". $value->getAthlete()->getCountry() ." won ". $value->getPrize()->value. PHP_EOL;
                }

            }
        }
    }

}

?>

