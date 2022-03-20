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
        $petition_id = $_GET['petition_id'];
        $petionCList = petitionCModel::get($petition_id);
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_allpetitionC.php');
    }

    public function indexnewCshow()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $petionCnewList = petitionnewCModel::getnew($petition_id);
        $userList = userModel::get($userid);
        require_once('views/petitionC/index_newallpetitionC.php');
    }



    public function updateformC()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $petionCList = petitionCModel::get($petition_id);
        $statusList = statusModel::getAll();
        $userList = userModel::get($userid);

        require_once('views/petitionC/updateformC.php');

    }

   

    public function updateformNoC()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $petionCList = petitionCModel::get($petition_id);
        $statusList = statusModel::getAll();
        $userList = userModel::get($userid);
        $appove = approveModel::getAll();
        petitionCModel::updateNo($petition_id);
        require_once('views/petitionC/updateformNoC.php');

    }

    public function updateC()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        //$status_id = $_GET['status_id'];
        petitionCModel::update($petition_id);
        petitionCController::indexC();
    }

    public function updateNoC()
    {
        $numrand = (mt_rand(100,900));
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $app_rea =$_GET['approve_reason'];
        //$status_id = $_GET['status_id'];
        $userList=userModel::get($userid);
        approveModel::Add($numrand, $app_rea);
        $aList = approveModel::get($numrand);
        petitionCModel::updateappNo($petition_id, $numrand);
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

    public function updateformnewNoC()
    {
       
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $petionCList = petitionnewCModel::getnew($petition_id);
        $statusList = statusModel::getAll();
        $userList = userModel::get($userid);
        $appove = approveModel::getAll();
        petitionnewCModel::updateNo($petition_id);
        require_once('views/petitionC/updateformnewNoC.php');

    }

    public function updatenewC()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        //$status_id = $_GET['status_id'];
        petitionnewCModel::update( $petition_id);
        petitionCController::indexC();
    }

    public function updatenewNoC()
    {
        $numrand = (mt_rand(100,900));
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $app_rea =$_GET['approve_reason'];
        $userList=userModel::get($userid);
        approveModel::Add($numrand, $app_rea);
        $aList = approveModel::get($numrand);
        //$status_id = $_GET['status_id'];
        petitionnewCModel::updateappNo($petition_id, $numrand);
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