<?php
namespace application;
class Profile extends Entity{
    private $userID;
    private $ageRange;
    private $yearBorn;
    private $gender;
    private $occupation;
    
    function __construct($id) {
        parent::__construct($id);
        $this->setUserID($id);
    }
    
    public function getData(){
        // hacer query y retornar datos del usuario
        return $this->databaseInterface->getQuery('SELECT * FROM Profile p WHERE p.userID = :id', $this->userID);
    }
    public function persist($params){
        // $stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
        // $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // <-- filter your data first (see [Data Filtering](#data_filtering)), especially important for INSERT, UPDATE, etc.
        // $stmt->bindParam(':id', $id, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
        // $stmt->execute();   
    }
    
    public function delete(){
        // execute query to delete object from db
        return $this->databaseInterface->getQuery('delete from Profile where userID= :id ',$this->userID);
    }
    
    public function getUserID(){
		return $this->userID;
	}

	private function setUserID($userID){
		$this->userID = $userID;
	}

	public function getAgeRange(){
		return $this->ageRange;
	}

	public function setAgeRange($ageRange){
		$this->ageRange = $ageRange;
	}

	public function getYearBorn(){
		return $this->yearBorn;
	}

	public function setYearBorn($yearBorn){
		$this->yearBorn = $yearBorn;
	}

	public function getGender(){
		return $this->gender;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getOccupation(){
		return $this->occupation;
	}

	public function setOccupation($occupation){
		$this->occupation = $occupation;
	}
}
?>