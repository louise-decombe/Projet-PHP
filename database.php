<?

include("person.php");

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

    	$query = $this->db->prepare("INSERT INTO Contacts (id, name, firstname, company, adress, cp, city, country, phone, email, website, situation) VALUES (:id, :name, :firstname, :company, :adress, :cp, :city, :country, :phone, :email, :website, :situation)");
    	
    	$query->bindValue(':id', 1);
    	$query->bindParam(':name', $p->name);
    	$query->bindParam(':firstname', $p->firstname);
    	$query->bindParam(':company', $p->company);
    	$query->bindParam(':adress', $p->adress);
    	$query->bindParam(':cp', $p->cp);
    	$query->bindParam(':city', $p->city);
    	$query->bindParam(':country', $p->country);
    	$query->bindParam(':phone', $p->phone);
    	$query->bindParam(':email', $p->email);
    	$query->bindParam(':website', $p->website);
    	$query->bindParam(':situation', $p->situation);
    	
    	$query->execute();
    }

}

$contactsDatabase = new Database();
$p = new Person($_POST['name'], $_POST['firstname'], $_POST['company'], $_POST['adress'], $_POST['cp'], $_POST['city'], $_POST['country'], $_POST['phone'], $_POST['email'], $_POST['website'], $_POST['situation']);
$contactsDatabase->addPerson($person);

?>