<?php

include_once __DIR__."/../model/doctor_model.php";

class DoctorController extends Doctor{
    public function getDoctors()
    {
        $result=$this->getDoctorList();
        return $result;
    }
}

?>