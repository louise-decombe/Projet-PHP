<?php

	include("person.php");
	include("database.php");

	$contactsDatabase = new Database();
	$p = new Person($_POST['name'], $_POST['firstname'], $_POST['company'], $_POST['adress'], $_POST['cp'], $_POST['city'], $_POST['country'], $_POST['phone'], $_POST['email'], $_POST['website'], $_POST['situation']);
	$contactsDatabase->addPerson($p);
?>