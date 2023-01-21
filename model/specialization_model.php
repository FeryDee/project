<?php
include_once __DIR__."/../includes/db.php";

class Specialization{

    private $pdo;
    public function getSpecializationList()
    {

       
        //connection
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //write sql;

        $sql="select * from specialization";

        //prepare sql;

        $statement=$this->pdo->prepare($sql);

        //execute 

        $statement->execute();

        //result

        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>