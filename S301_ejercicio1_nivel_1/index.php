<?php

require_once 'OlympicGames.php';

$olympics = new OlympicGames(

    $athletesData = [
        new Athlete('Usain Bolt','Jamaica'),
        new Athlete('Michael Phelps', 'USA')
    ],

    $eventsData = [
        new Event('100m Sprint', '2024-08-01'),
        new Event('Swimming', '2024-08-02')
    ],

    $resultsData = [
        new Result($athletesData[0], $eventsData[0], PRIZE::GOLD),
        new Result($athletesData[1], $eventsData[1], PRIZE::GOLD)
    ]

);



$olympics->processOlympicData();


?>