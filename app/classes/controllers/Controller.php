<?php
namespace application;
require_once("PostgreInterface.php");
abstract class Controller{
    
    protected $entity;
    protected $databaseInterface;
    
    function __construct() {
        $this->databaseInterface= new PostgreInterface();
    }
    abstract public function getEntity($params);
    abstract public function persist($params);
    abstract public function delete($params);
    static public function getAllInstances($type){
        if(is_string($type)){
            $dbinterface= new PostgreInterface();
            return $dbinterface->getQuery("Select * From "+$type,null);
        }
        return null;
    }
}
?>
