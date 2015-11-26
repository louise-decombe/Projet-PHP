<?php

class Person
{
    private $name;
    private $firstname;
    private $company;
    private $adress;
    private $cp;
    private $city;
    private $country;
    private $phone;
    private $email;
    private $website;
    private $situation;

    public function __construct($name, $firstname, $company, $adress, $cp, $city, $country, $email, $phone, $website, $situation)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->company = $company;
        $this->adress = $adress;
        $this->cp = $cp;
        $this->city = $city;
        $this->country = $country;
        $this->phone = $phone;
        $this->email = $email;
        $this->website = $website;
        $this->situation = $situation;
    }
}

?>