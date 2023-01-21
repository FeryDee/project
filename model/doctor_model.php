<?php

include_once __DIR__."/../includes/db.php";

class Doctor{
    private $pdo;
    public function getDoctorList()
    {
        //get connect
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //write sql
        $sql="select * from doctors";

        //prepare sql
        $statement=$this->pdo->prepare($sql);

        $statement->execute();

        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>