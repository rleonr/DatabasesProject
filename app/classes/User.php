<?php
namespace application;
require_once('Entity.php');

class User extends Entity{
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $city;
    private $province;
    private $country;
    
    function __construct($id) {
        parent::__construct($id);
    }
    public function getData(){
        // hacer query y retornar datos del usuario
        return array(
            'id'=> $this->ID,
        );
    }
    public function persist(){
        // execute query to save current state into database        
    }
    
    public function delete(){
        // execute query to delete object from db
    }
    public static function getAllInstances()
    {
        return "Todos los users";
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