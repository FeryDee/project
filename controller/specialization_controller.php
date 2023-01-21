<?php
require_once __DIR__."/../model/specialization_model.php";

class SpecializationController extends Specialization{

    public function getSpecialization()
    {
        $result=$this->getSpecializationList();
        return $result;
    }

}

?>