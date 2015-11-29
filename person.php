<?php

/* Classe Personne */

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

    /* Constructeur */

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

    /* Accesseurs */

    public function getName(){
        return $this->name;
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function getCompany(){
        return $this->company;
    }

    public function getAdress(){
        return $this->adress;
    }

    public function getCP(){
        return $this->cp;
    }

    public function getCity(){
        return $this->city;
    }

    public function getCountry(){
        return $this->country;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getWebsite(){
        return $this->website;
    }

    public function getSituation(){
        return $this->situation;
    }
}

?>