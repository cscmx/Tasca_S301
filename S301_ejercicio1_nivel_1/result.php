<?php

require_once 'S301_ejercicio1_nivel_1/prize.php';

class Result
{
    private Athlete $athlete;
    private Event $event;
    private Prize $prize;

    public function __construct (Athlete $athlete, Event $event, Prize $prize)
    {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->prize = $prize;
    }

    public function getAthlete(): Athlete
    {
        return $this->athlete;
    }
    public function setAthlete (Athlete $athlete)
    {
        $this->athlete = $athlete;
    }

    public function getEvent (): Event
    {
        return $this->event;
    } 
    public function setEvent(Event $event)
    {
        $this->event = $event;
    }

    public function getPrize(): Prize
    {
        return $this->prize;
    }
    public function setPrize(Prize $prize)
    { 
        $this->prize = $prize;
    }


}
?>