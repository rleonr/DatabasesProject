<?php
namespace application;
require_once(dirname(__DIR__). '/entities/User.php');

class UserController extends Controller{
    function __construct($id){
        parent::__construct();
        $this->entity= new User();
        $this->entity->setID($id);
    }  
    public function getEntity($params){
        // hacer query y retornar datos del usuario
        return $this->databaseInterface->getQuery('SELECT * FROM User u WHERE u.userID = :id',$this->entity->getId());
    }
    public function persist($params){
        $this->setPassword(password_hash($this->params[1]));
        $this->setName($this->params[2],$this->params[3]);
        $this->setEmail($this->params[4]);
        $this->setLocation($this->params[5],$this->params[6],$this->params[7]);
        // $stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
        // $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // <-- filter your data first (see [Data Filtering](#data_filtering)), especially important for INSERT, UPDATE, etc.
        // $stmt->bindParam(':id', $id, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
        // $stmt->execute();   
    }
    
    public function delete($params){
        // execute query to delete object from db
    }
}
?>