<?php

class Event
{
    private string $name;
    private string $date;

    public function __construct(string $name, string $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public function getName(): string 
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getDate (): string
    {
        return $this->date;
    }
    public function setDate(string $date)
    {
        $this->date = $date;
    }
}

?>