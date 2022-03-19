<?php
class petitionCController
{
    public function indexC()
    {
        $userid = $_GET['userid'];
        $petionCList = petitionCModel::getAll();
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_petitionC.php');
    }

    public function indexCall()
    {
        $userid = $_GET['userid'];
        $petionCList = petitionCModel::getAll();
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_allpetitionC.php');
    }

    public function newpetitionC()
    {
        $userid = $_GET['userid'];
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
       
        //$userid = $_GET['userid'];
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
        $userid = $_GET['userid'];
        $c = $_GET['petition_id'];
        $petionCList = petitionCModel::get($c);
        $statusList = statusModel::getAll();
        $userList = userModel::get($userid);

        require_once('views/petitionC/updateformC.php');

    }

    public function updateC()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petitionid'];
        $status_id = $_GET['status_id'];
        petitionCModel::update( $petition_id, $status_id);
        petitionCController::indexC();
    }

    public function deleteconfirmC()
    {
        $userid = $_GET['userid'];
        $c = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionCList = petitionCModel::get($c);
        require_once('views/petitionC/deleteconfirmC.php');

    }

    public function deleteC()
    {
        $userid = $_GET['userid'];
        $petitionid = $_GET['petitionid'];
        $userList=userModel::get($userid);
        petitionCModel::delete($petitionid);
        petitionCController::indexC();
    }

    public function searchC()
    {
        $userid = $_GET['userid'];
        $key = $_GET['key'];
        $userList=userModel::get($userid);
        $petionCList = petitionCModel::search($key);
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_petitionC.php');
    }



}?>