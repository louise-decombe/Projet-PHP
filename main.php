<?php

	include("person.php");
	include("database.php");

	/* Quand on a cliqué sur Ajouter */

	if($_POST['event']=="add"){
		$contactsDatabase = new Database();
		$p = new Person($_POST['name'], $_POST['firstname'], $_POST['company'], $_POST['adress'], $_POST['cp'], $_POST['city'], $_POST['country'], $_POST['phone'], $_POST['email'], $_POST['website'], $_POST['situation']);
		$contactsDatabase->addPerson($p);
	}

	/* Quand on a cliqué sur Modifier */

	if($_POST['event']=="update"){
		$contactsDatabase = new Database();
		$p = new Person($_POST['name'], $_POST['firstname'], $_POST['company'], $_POST['adress'], $_POST['cp'], $_POST['city'], $_POST['country'], $_POST['phone'], $_POST['email'], $_POST['website'], $_POST['situation']);
		$contactsDatabase->updatePerson($p, $_POST['id']);
	}

	/* Quand on a cliqué sur un contact */

	if($_POST['event']=="clickOnContact"){
		$contactsDatabase = new Database();
		$data = $contactsDatabase->getDataPerson($_POST['id']);
		echo($data);
	}

	/* Quand on a cliqué sur Supprimer  */

	if($_POST['event']=="delete"){
		$contactsDatabase = new Database();
		$contactsDatabase->deletePerson($_POST['id']);
	}

	/* Quand on souhaite afficher la liste des contacts */

	if($_POST['event']=="list"){
		$contactsDatabase = new Database();
		$data = $contactsDatabase->listPersons();
		print_r($data);
	}


?>