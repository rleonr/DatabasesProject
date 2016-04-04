<?php
namespace application;
require_once('classes/controllers/Controller.php');
require_once('classes/controllers/UserController.php');
require_once('classes/controllers/ProfileController.php');
require_once('classes/controllers/ActorController.php');
require_once('classes/controllers/RoleController.php');
require_once('classes/controllers/StudioController.php');
require_once('classes/controllers/MovieController.php');
require_once('classes/controllers/TopicController.php');
require_once('classes/controllers/DirectorController.php');
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
    protected function actor(){
        return $this->processEndpoint('application\ActorController');
    }
    protected function role(){
        return $this->processEndpoint('application\RoleController');
    }
    protected function studio(){
        return $this->processEndpoint('application\StudioController');
    }
    protected function movie(){
        return $this->processEndpoint('application\MovieController');
    }
    protected function topic(){
        return $this->processEndpoint('application\TopicController');
    }
    protected function director(){
        return $this->processEndpoint('application\DirectorController');
    }
    
    protected function processEndpoint($endpoint){
       if(count($this->args)===1){
            if(is_numeric($this->args[0])){
                $this->controller= new $endpoint($this->args[0]);
            }
            else
                return "Invalid ID";
            return $this->RESTcontroller();
        }
        else if(count($this->args)===0){
            return $this->getAllInstances($endpoint);
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
            else if($this->method=='DELETE'){
                return $this->controller->delete($this->params);
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