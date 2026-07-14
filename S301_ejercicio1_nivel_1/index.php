<?php

require_once 'OlympicGames.php';



$athletesData = [
    new Athlete('Usain Bolt','Jamaica'),
    new Athlete('Michael Phelps', 'USA'),
    new Athlete('Armand Duplantis', 'Sweden') //extra element for testing
];

$eventsData = [
    new Event('100m Sprint', '2024-08-01'),
    new Event('Swimming', '2024-08-02'),
    new Event('Pole Vaulter', '2024-08-03') //extra element for testing
];

$olympics = new OlympicGames(

    $resultsData = [
        new Result($athletesData[0], $eventsData[0], Prize::GOLD),
        new Result($athletesData[1], $eventsData[1], Prize::GOLD),
        new Result($athletesData[2], $eventsData[2], Prize::GOLD) //extra element for testing
    ]

);


$olympics->processOlympicData();


?>