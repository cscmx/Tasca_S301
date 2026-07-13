<?php

class Athlete
{
    private string $name;
    private string $country;

    public function __construct(string $name, string $country)
    {
        $this->name = $name;
        $this->country = $country;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getCountry(): string
    {
        return $this->country;
    }
    public function setCountry(string $country)
    {
        $this->country = $country;
    }


}

?>  
