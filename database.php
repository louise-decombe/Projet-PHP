<?php

class Database
{
	private $db;

    public function __construct(){
    	
    	$this->db = new PDO('sqlite:persons.sqlite');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db->exec("CREATE TABLE IF NOT EXISTS Contacts(
			id INTEGER PRIMARY KEY AUTOINCREMENT,
			name VARCHAR(30),
			firstname VARCHAR(30),
			company VARCHAR(30),
			adress VARCHAR(50),
			cp INTEGER,
			city VARCHAR(30),
			country VARCHAR(30),
			phone INTEGER,
			email VARCHAR(50),
			website VARCHAR(50),
			situation VARCHAR(30))");
    }

    public function addPerson($p){

    	$query = $this->db->prepare("INSERT INTO Contacts (name, firstname, company, adress, cp, city, country, phone, email, website, situation) VALUES (:name, :firstname, :company, :adress, :cp, :city, :country, :phone, :email, :website, :situation)");
    	
    	$query->bindParam(':name', $p->getName());
    	$query->bindParam(':firstname', $p->getFirstname());
    	$query->bindParam(':company', $p->getCompany());
    	$query->bindParam(':adress', $p->getAdress());
    	$query->bindParam(':cp', $p->getCP());
    	$query->bindParam(':city', $p->getCity());
    	$query->bindParam(':country', $p->getCountry());
    	$query->bindParam(':phone', $p->getPhone());
    	$query->bindParam(':email', $p->getEmail());
    	$query->bindParam(':website', $p->getWebsite());
    	$query->bindParam(':situation', $p->getSituation());
    	
    	$query->execute();
    }

}

?>