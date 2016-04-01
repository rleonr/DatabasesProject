<?php
namespace application;
require_once(dirname(__DIR__).'./entities/Profile.php');
class ProfileController extends Controller{
    
    function __construct($id){
        parent::__construct();
        $this->entity= new Profile();
        $this->entity->setUserID($id);
    }      
    public function getEntity($params){
        // hacer query y retornar datos del usuario
        return $this->databaseInterface->getQuery('SELECT * FROM Profile p WHERE p.userID = :id', $this->entity->getUserID());
    }
    public function persist($params){
        // $stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
        // $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // <-- filter your data first (see [Data Filtering](#data_filtering)), especially important for INSERT, UPDATE, etc.
        // $stmt->bindParam(':id', $id, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
        // $stmt->execute();   
    }
    
    public function delete($params){
        // execute query to delete object from db
        return $this->databaseInterface->getQuery('delete from Profile where userID= :id ',$this->entity->getUserID());
    }
    
}
?>