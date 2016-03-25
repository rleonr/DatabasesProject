<?php
namespace application;
require_once('classes/User.php');
require_once('api.php');

class ConcreteAPI extends API{

    public function __construct($request, $origin) {
        parent::__construct($request);
    }

     protected function user() {
        if ($this->method == 'GET') {
            return "Your name is " . $this->User->name;
        } else {
            return "Only accepts GET requests";
        }
     }
}
?>