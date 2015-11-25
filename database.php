<?php

class Database
{
	private $db;

	public function __construct()
    {
        $db = new PDO('sqlite:persons.sqlite');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->exec("CREATE TABLE IF NOT EXISTS CONTACTS(
			id INTEGER PRIMARY KEY AUTOINCREMENT,
			name VARCHAR(30),
			firstname VARCHAR(30),
			company VARCHAR(30),
			adress VARCHAR(50),
			cp INTEGER,
			city VARCHAR(30),
			phone INTEGER,
			email VARCHAR(50),
			website VARCHAR(50),
			situation VARCHAR(30))");
    }

    public createDatabase(){
    	$database = new Database();
    }

    public addPerson($p){
    	$qh = $db->execute("INSERT INTO contacts (name, firstname, company, adress, cp, city, country, phone, website, situation)
    		VALUES (" . $p->name . "," . $p->firstname . "," . $p->company . "," . $p->adress . "," . $p->cp . "," 
    			. $p->city . "," . $p->phone . "," . $p->email . "," . $p->website . "," . $p->situation ")");
    }

}


$contactsDatabase = new Database();
$person = new Person($_POST('name'), $_POST('firstname'), $_POST('company'), $_POST('adress'), $_POST('cp'), $_POST('city'), $_POST('phone'), $_POST('email'), $_POST('website'), $_POST('situation'));
$contactsDatabase.addPerson($person);

?>