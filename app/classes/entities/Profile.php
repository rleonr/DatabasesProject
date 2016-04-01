<?php
namespace application;

class Profile{
    
    private $userID;
    private $ageRange;
    private $yearBorn;
    private $gender;
    private $occupation;

    public function getUserID(){
		return $this->userID;
	}

	public function setUserID($userID){
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