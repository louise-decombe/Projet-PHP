<?php

class Database
{
	private $db;

	public function __construct()
    {
        $db = new PDO('sqlite:../Bases/persons.sqlite');
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

}

?>