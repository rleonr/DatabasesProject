<?php
namespace application;
require_once('Entity.php');

class User implements Entity{
    private $UserID;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $city;
    private $province;
    private $country;
    
    function __construct($id){
        $this->setUserID($id);
    }
    
    public function getData_json(){
        // returns current state in json format
    }
    public function persist(){
        // execute query to save current state into database        
    }
    public function getID(){
        if($this->UserID!= -1)
            return $this->UserID;
        else return "Object Not initialized";
    }
    public function setUserID($id){
        $this->UserID= $id;
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