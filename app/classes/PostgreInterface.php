<?php
namespace application;

class PostgreInterface
{
    private $pdo;
    function __construct()
    {
        try{
            $this->pdo= new \PDO('pgsql:dbname=rleon061;host=web0.site.uottawa.ca;port=15432;user=rleon061;password=****');
        } catch (PDOException $e) {
             print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function getPDO(){
        return $this->pdo;
    }
}

?>