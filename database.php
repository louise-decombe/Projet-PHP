<?php

/* Classe correspondant à la base de données */

class Database
{
	private $db;

    /* Constructeur
     * Création d'un fichier person.sqlite
     * Création d'une table Contacts et de ses champs
     */

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

    /* Ajout d'une personne à la base */

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

    /* Affichage de la lsite des personnes */

    public function listPersons(){

        $query = $this->db->query("SELECT id, name, firstname, company, adress, cp, city, country, phone,
         email, website, situation FROM Contacts");
        
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            $i = 0;
            foreach($row as $value){
                if($i == 0){
                    $res.= "<p class='displayContacts' id='" . $value . "'>";
                }
                else if($i == 3 || $i == 4 || $i == 7 || $i == 8 || $i == 9 ){
                    $res.= "</br>";
                    $res.=$value . " ";
                }
                else {
                    $res.=$value . " ";
                }
                $i++;
            }
            $res.= "</p> </br>";
        }
        
        return $res;
    }


    /* Mise à jour d'une personne dans la base */

    public function updatePerson($p, $id){

        $query = $this->db->query("UPDATE Contacts SET name = '" . $p->getName() . "', firstname = '" . $p->getFirstname()
            . "', company  = '" . $p->getCompany() . "', adress = '" . $p->getAdress() . "', cp = '" . $p->getCP()
            . "', city = '" . $p->getCity() . "', country = '" . $p->getCountry() . "', phone = '" . $p->getPhone()
            . "', email = '" . $p->getEmail() . "', website = '" . $p->getWebsite() . "', situation = '"
            . $p->getSituation() . "'  WHERE id = " . $id);
    }

    /* Suppression d'une personne dans la base */

    public function deletePerson($id){

        $query = $this->db->exec("DELETE FROM Contacts WHERE id = " . $id);
    }

    /* Récupérer l'ID d'une personne */

    public function getIDPerson($p){
    	$query = $this->db->query("SELECT id FROM Contacts WHERE name = '" . $p->getName()
            . "' AND firstname = '" . $p->getFirstname() . "' AND company = '" . $p->getCompany()
            . "' AND adress = '" . $p->getAdress() . "' AND cp = '" . $p->getCP()
            . "' AND city = '". $p->getCity() . "' AND country = '" . $p->getCountry()
            . "' AND phone = '" . $p->getPhone() . "' AND email = '" . $p->getEmail()
            . "' AND website = '" . $p->getWebsite() . "' AND situation = '" . $p->getSituation() . "'");
        return $query->fetchColumn();
    }

    /* Récupérer les informations sur une personne en fonction de l'ID
     *  Permet de récupérer infos sur une personne quand on clique dessus pour les ajouter 
     *   au formulaire.
     */

    public function getDataPerson($id){
        $query = $this->db->query("SELECT name, firstname, company, adress, cp, city, country, phone,
         email, website, situation FROM Contacts WHERE id = " . $id);
        $tab = $query->fetch(PDO::FETCH_OBJ);
        foreach ($tab as $value) {
            $res .= $value;
            $res .= ",";
        }
        return $res;
    }
}


?>