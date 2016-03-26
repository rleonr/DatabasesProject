<?php
namespace application;
abstract class Entity{
    protected $databaseInterface;
    abstract public function getData();
    abstract public function persist();
    abstract public function getID();
    abstract public function delete();
    abstract static public function getAllInstances();
}
?> 