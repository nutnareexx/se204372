<?php
class petitionCController
{
    public function indexC()
    {
        $userid = $_GET['userid'];
        $petionCList = petitionCModel::getAll();
        $petionCnewList = petitionnewCModel::getAllnew();
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_petitionC.php');
    }

    public function indexCshow()
    {
        $userid = $_GET['userid'];
        $peti_id = $_GET['petition_id'];
        $petionCList = petitionCModel::get($peti_id);
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_allpetitionC.php');
    }

    public function indexnewCshow()
    {
        $userid = $_GET['userid'];
        $peti_id = $_GET['petition_id'];
        $petionCnewList = petitionnewCModel::getnew($peti_id);
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_newallpetitionC.php');
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

   

    public function updateformNoC()
    {
        $userid = $_GET['userid'];
        $c = $_GET['petitionid'];
        $petionCList = petitionCModel::get($c);
        $statusList = statusModel::getAll();
        $userList = userModel::get($userid);
        $appove = approveModel::getAll();
        petitionCModel::updateNo($c);
        require_once('views/petitionC/updateformNoC.php');

    }

    public function updateC()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petitionid'];
        //$status_id = $_GET['status_id'];
        petitionCModel::update($petition_id);
        petitionCController::indexC();
    }

    public function updateNoC()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petitionid'];
        //$status_id = $_GET['status_id'];
        petitionCModel::updateNo($petition_id);
        petitionCController::indexC();
    }

    public function updateformnewC()
    {
        $userid = $_GET['userid'];
        $c = $_GET['petition_id'];
        $petionCnewList = petitionnewCModel::getnew($c);
        $statusList = statusModel::getAll();
        $userList = userModel::get($userid);

        require_once('views/petitionC/updateformnewC.php');

    }

    public function updatenewC()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petitionid'];
        $status_id = $_GET['status_id'];
        petitionnewCModel::update( $petition_id, $status_id);
        petitionCController::indexC();
    }


    public function searchC()
    {
        $userid = $_GET['userid'];
        $key = $_GET['key'];
        $userList=userModel::get($userid);
        $petionCList = petitionCModel::search($key);
        $petionCnewList = petitionnewCModel::search($key);
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_petitionC.php');
    }



}?>