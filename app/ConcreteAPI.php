<?php
namespace application;
require_once('classes/User.php');
require_once('api.php');

class ConcreteAPI extends API{

    public function __construct($request, $origin) {
        parent::__construct($request);
    }

     protected function user() {
         $User= new User($this->args[0]);
        if ($this->method == 'GET') {
            return $User->getData();
        } else {
            return "Only accepts GET requests";
        }
     }
}
?>