<?php

class OlympicGames 
{
    private array $athletes = [];
    private array $events = [];
    private array $results = [];


    public function addingAthleteInformation(array $athletesData, array $eventsData, array $resultsData): void 
    {
        foreach ($athletesData as $athlete) {
            $this->athletes[] = ['name' => $athlete['name'], 'country' => $athlete['country']];
        }

        foreach ($eventsData as $event) {
            $this->events[] = ['event' => $event['event'], 'date' => $event['date']];
        }

        foreach ($resultsData as $result) {
            $this->results[] = [
                'athlete' => $result['athlete'],
                'event' => $result['event'],
                'medal' => $result['medal']
            ];
        } 

    }


    public function processOlympicData()
    {
        echo "Olympic Games Results:\n";
        
        foreach ($this->events as $event) {
            echo "Event: " . $event['event'] . " on " . $event['date'] . "\n";
            foreach ($this->results as $result) {
                if ($result['event'] === $event['event']) {
                    echo "- " . $result['athlete'] . " from " . $result['country'] . " won " . $result['medal'] . "\n";
                }
            }
        }
        
    }
}


?>
