<?php
namespace application;
require_once('Entity.php');

class User extends Entity{
    private $userID;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $city;
    private $province;
    private $country;
    
    function __construct($id) {
        parent::__construct($id);
        $this->setId($id);
    }
    public function getData(){
        // hacer query y retornar datos del usuario
        return $this->databaseInterface->getQuery('SELECT * FROM User u WHERE u.userID = :id',$this->userID);
    }
    public function persist($params){
        $this->setPassword(password_hash($this->params[1]));
        $this->setName($this->params[2],$this->params[3]);
        $this->setEmail($this->params[4]);
        $this->setLocation($this->params[5],$this->params[6],$this->params[7]);
        // $stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
        // $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // <-- filter your data first (see [Data Filtering](#data_filtering)), especially important for INSERT, UPDATE, etc.
        // $stmt->bindParam(':id', $id, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
        // $stmt->execute();   
    }
    
    public function delete(){
        // execute query to delete object from db
    }
    private function setID($id){
        $this->userID= $id;
    }
    public function getID(){
        return $this->userID;
    }
    
    public function setPassword($password){
        $this->password= $password;
    }     
    public function getPassword($password){
        return $this->password;
    }
    public function setName($firstName, $lastName){
        $this->firstName= $firstName;
        $this->lastName= $lastName;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setEmail($email){
        $this->email= $email;
    }
    public function getEmail(){
        return $email;
    }
    public function setLocation($city,$province,$country){
        $this->city= $city;
        $this->province= $province;
        $this->country= $country;
    }
    public function getCity(){
        return $this->city;
    }
    public function getProvince(){
        return $this->province;
    }
    public function getCountry(){
        return $this->country;
    }
}

?>