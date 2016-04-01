<?php
namespace application;
require_once('classes/controllers/Controller.php');
require_once('classes/controllers/UserController.php');
require_once('classes/controllers/ProfileController.php');
require_once('api.php');

class ConcreteAPI extends API{
    private $params;
    private $controller;
    public function __construct($request, $origin) {
        parent::__construct($request);
    }
    
    protected function user() {
         return $this->processEndpoint('application\UserController');
    }
    protected function profile(){
        return $this->processEndpoint('application\ProfileController');
    }
    
    protected function processEndpoint($endpoint){
       if(count($this->args)===1){
            if(is_numeric($this->args[0])){
                $this->controller= new $endpoint($this->args[0]);
            }
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
                return $this->controller->getEntity($this->params);
            } 
            else if($this->method=='POST'){
                $this->params= $this->_cleanInputs($_POST);
                return $this->controller->persist($this->params);
            }
            else {
                return "Unknown verb";
            }
     }
     private function getAllInstances($type){
            if($this->method=='GET')
            {
                return Controller::getAllInstances($type);
            }
            else return "{}";
     }
}
?>