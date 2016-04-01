<?php
namespace application;

class PostgreInterface
{
    private $pdo;
    function __construct()
    {
        try{
            $this->pdo= new \PDO('pgsql:dbname=rleon061;host=web0.site.uottawa.ca;port=15432;user=rleon061;password=rleonR-79365');
        } catch (PDOException $e) {
             print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function getPDO(){
        return $this->pdo;
    }
    public function getQuery($query,$id){
        $stmt = $this->pdo->prepare($query);
        if(strpos($query,":id") && !is_null($id) )
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>