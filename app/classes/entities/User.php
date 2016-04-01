<?php
namespace application;

class User{
    private $userID;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $city;
    private $province;
    private $country;
    
    public function setID($id){
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