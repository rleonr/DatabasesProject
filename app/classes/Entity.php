<?php
namespace application;
require_once('PostgreInterface.php');
abstract class Entity{
    protected $databaseInterface;
    function __construct($id) {
        $this->databaseInterface= new PostgreInterface();
    }
    abstract public function getData();
    abstract public function persist($params);
    abstract public function delete();
    static public function getAllInstances($type){
        if(is_string($type)){
            $dbinterface= new PostgreInterface();
            return $dbinterface->getQuery("Select * From "+$type,null);
        }
        return null;
    }
}
?> 