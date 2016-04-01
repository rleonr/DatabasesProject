<?php
namespace application;
class TopicController extends Controller{
	function __construct()
	{
		parent::__construct();		
	}

	public function getEntity($params){
        // hacer query y retornar datos del usuario
        $topicId= $params['topicId'];
        return $this->databaseInterface->getQuery('SELECT * FROM Topic t WHERE t.topicId = :id',$topicId);
    }
    
    public function persist($params){
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