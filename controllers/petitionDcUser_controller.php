<?php
class petitionDcUserController
{
    public function index()
    {
        $petionDcList = petitionDcModel::getAll();
        require_once('views/petitionDcUser/index_petitionDcUser.php');
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
        require_once('views/petitionDcUser/newpetitionDc.php');
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
        petitionDcModel::Add($dc_id, $petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p, 
        $dc_position,$dc_name, $dc_pay, $dc_room);
        petitionDcUserController::index();
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
        petitionDcUserController::index();
    }

    public function deleteconfirm()
    {
        $dc = $_GET['petition_id'];
        $petionDcList = petitionDcModel::get($dc);
        require_once('views/petitionDc/deleteconfirm.php');

    }

    public function delete()
    {
        $petitionid = $_GET['petitionid'];
        petitionDcModel::delete($petitionid);
        petitionDcUserController::index();
    }



}?>