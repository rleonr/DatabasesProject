<?php
namespace application;
require_once('classes/User.php');
require_once('api.php');

class ConcreteAPI extends API{
    private $params;
    private $entity;
    public function __construct($request, $origin) {
        parent::__construct($request);
    }
    
    protected function user() {
         return $this->processEndpoint('application\User');
    }
    protected function profile(){
        return $this->processEndpoint('application\Profile');
    }
    
    protected function processEndpoint($endpoint){
       if(count($this->args)===1){
            if(is_numeric($this->args[0]))
                $this->entity= new $endpoint($this->args[0]);
            else
                return "Invalid ID";
            return ConcreteAPI::RESTcontroller();
        }
        else if(count($this->args)===0){
            return ConcreteAPI::getAllInstances($endpoint);
        }
        else
            return "Invalid URL";
    }
     
     private function RESTcontroller(){
         if ($this->method == 'GET') {
                $this->params= $this->_cleanInputs($_GET);
                return $this->entity->getData();
            } 
            else if($this->method=='POST'){
                $this->params= $this->_cleanInputs($_POST);
                return $this->entity->persist($params);
            }
            else {
                return "Unknown verb";
            }
     }
     private function getAllInstances($type){
            if($this->method=='GET')
            {
                return Entity::getAllInstances($type);
            }
            else return "{}";
     }
}
?>