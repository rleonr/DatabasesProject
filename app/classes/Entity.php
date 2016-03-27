<?php
namespace application;
require_once('PostgreInterface.php');
abstract class Entity{
    protected $ID;
    protected $databaseInterface;
    function __construct($id) {
        $this->setID($id);
        $this->databaseInterface= new PostgreInterface();
    }
    public function getID(){
        if($this->ID!= -1)
            return $this->UserID;
        else return "Object Not initialized";
    }
    protected function setID($id){
        $this->ID= $id;
    }
    abstract public function getData();
    abstract public function persist();
    abstract public function delete();
    abstract static public function getAllInstances();
}
?> 