<?php
class petitionDcController
{
    public function index()
    {
        $petionDcList = petitionDcModel::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function newpetitionDc()
    {
        $petionDcList = petitionDcModel::getAll();
        //$approveList = approveModel::getAll();
        $statusList = statusModel::getAll();
        $nametitleList = nametitleModel::getAll();
        //$userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        //$cooperativeList =  cooperativeModel::getAll();
        require_once('views/petitionDc/newpetitionDc.php');
    }

    public function addpetitionDc()
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
        $status_id = $_GET['status_id'];
        $status_name = $_GET['status_name'];
        petitionDcModel::Add($dc_id, $petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p, 
        $dc_position,$dc_name, $dc_pay, $dc_room, $status_id, $status_name);
        petitionDcController::index();
    }

    public function updateform()
    {
       
        $dc = $_GET['petition_id'];
        $petionDcList = petitionDcModel::get($dc);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        require_once('views/petitionDc/updateform.php');

    }

    public function update()
    {
        
        $petition_id = $_GET['petitionid'];
        $status_id = $_GET['status_id'];
        petitionDcModel::update( $petition_id, $status_id);
        petitionDcController::index();
    }



}?>