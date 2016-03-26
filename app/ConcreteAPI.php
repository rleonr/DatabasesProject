<?php
namespace application;
require_once('classes/User.php');
require_once('api.php');

class ConcreteAPI extends API{
    private $params;
    public function __construct($request, $origin) {
        parent::__construct($request);
    }

     protected function user() {
         if(count($this->args)>0){
            if(is_numeric($this->args[0]))
                $User= new User($this->args[0]);
            else
                return "Invalid ID";
            if ($this->method == 'GET') {
                $this->params= $this->_cleanInputs($_GET);
                return $User->getData();
            } 
            else if($this->method=='POST'){
                $this->params= $this->_cleanInputs($_POST);
                $User.setPassword(password_hash($this->params[1]));
                $User.setName($this->params[2],$this->params[3]);
                $User.setEmail($this->params[4]);
                $User.setLocation($this->params[5],$this->params[6],$this->params[7]); 
                return $User->persist();
            }
            else {
                return "Unknown verb";
            }
        }
        else{
            if($this->method=='GET')
            {
                return User::getAllInstances();
            }
            else return "{}";
        }
     }
}
?>