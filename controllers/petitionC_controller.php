<?php
class petitionCController
{
    public function indexC()
    {
        $petionCList = petitionCModel::getAll();
        require_once('views/petitionC/index_petitionC.php');
    }

    public function newpetitionC()
    {
        $petionCList = petitionCModel::getAll();
        //$approveList = approveModel::getAll();
        $statusList = statusModel::getAll();
        $nametitleList = nametitleModel::getAll();
        //$userList = userModel::getAll();
        //$DetailCompanyList = DetailCompanyModel::getAll();
        $cooperativeList =  cooperativeModel::getAll();
        require_once('views/petitionDc/newpetitionDc.php');
    }

    public function addpetitionC()
    {
        echo "addp";
        $dc_id = $_GET['dc_id'];
        $petition_id = $_GET['petition_id'];
        $user_id = $_GET['user_id'];
        $name_title = $_GET['name_title'];
        $user_name = $_GET['user_name'];
        $user_surname = $_GET['user_surname'];
        $start_p = $_GET['start_p'];
        $finish_p = $_GET['finish_p'];
        $dc_position = $_GET['dc_position'];
        $dc_name = $_GET['dc_name'];
        $dc_pay = $_GET['dc_pay'];
        $dc_room = $_GET['dc_room'];
        petitionCModel::Add($dc_id, $petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p, 
        $dc_position,$dc_name, $dc_pay, $dc_room);
        petitionCController::indexC();
    }

    public function updateformC()
    {
       
        $dc = $_GET['petition_id'];
        $petionCList = petitionCModel::get($dc);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $cooperativeList =  cooperativeModel::getAll();
        $statusList = statusModel::getAll();
        require_once('views/petitionC/updateformC.php');

    }

    public function updateC()
    {
        
        $petition_id = $_GET['petitionid'];
        $status_id = $_GET['status_id'];
        petitionCModel::update( $petition_id, $status_id);
        petitionCController::indexC();
    }

    public function deleteconfirmC()
    {
        $dc = $_GET['petition_id'];
        $petionCList = petitionCModel::get($dc);
        require_once('views/petitionC/deleteconfirmC.php');

    }

    public function deleteC()
    {
        $petitionid = $_GET['petitionid'];
        petitionCModel::delete($petitionid);
        petitionCController::indexC();
    }

    public function searchC()
    {
        $key = $_GET['key'];
        $petionCList = petitionCModel::search($key);
        require_once('views/petitionC/index_petitionC.php');
    }



}?>