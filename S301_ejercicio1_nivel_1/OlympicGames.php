<?php

require_once 'S301_ejercicio1_nivel_1/athlete.php';
require_once 'S301_ejercicio1_nivel_1/event.php';
require_once 'S301_ejercicio1_nivel_1/result.php';

class OlympicGames 
{
    private array $athletes;
    private array $events;
    private array $results;

    public function __construct(array $athletes, array $events, array $results)
    {
        $this->athletes = $athletes;
        $this->events = $events;
        $this->results = $results;
    }


    public function processOlympicData()
    {
        echo "Olympic Games Results:\n";

        foreach ($this->events as $event)
        {
            echo "Event: ". $event->getName(). " on ". $event->getDate().PHP_EOL;
            foreach ($this->results as $result)
            {   

                if ($result->getEvent()->getName() == $event->getName())
                {
                    echo $result->getAthlete()->getName(). " from ". $result->getAthlete()->getCountry() ." won ". $result->getPrize()->value. PHP_EOL; 
                }
            }
        }



        
    }
}


?>
