<?php
class petitionCUserController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        // $nametitleList  = nametitleModel::getAll();
        require_once('views/petitionCUser/index_petitionCUser.php');
    }

    public function index2()
    {
        $userid = $_GET['userid'];
        $userList = userModel::get($userid);
        $date = $_GET['date'];
        $userid = $_GET['userid'];
        $company = $_GET['company'];
        $comList = DetailCompanyModel::getAll();
        $userList = userModel::get($userid);
        require_once('views/petitionCUser/index2_petitionCUser.php');
    }

    public function newpetitionC()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionCList = petitionCModel::getAll();
        //$approveList = approveModel::getAll();
        $statusList = statusModel::getAll();
        $nametitleList = nametitleModel::getAll();
        //$userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        //$cooperativeList =  cooperativeModel::getAll();
        require_once('views/petitionCUser/newpetitionC.php');
    }

    public function addpetitionC()
    {
        $userid = $_GET['userid'];
        echo "addp";
        // $c_id = $_GET['c_id'];
        // // $petition_id = $_GET['petition_id'];
        $user_id = $_GET['user_id'];
        // $name_title = $_GET['name_title'];
        // $user_name = $_GET['user_name'];
        // $user_surname = $_GET['user_surname'];
        $start_p = $_GET['start_p'];
        $finish_p = $_GET['finish_p'];
        $date_p = $_GET['date_p'];
        // $status_id = $_GET['status_id'];
        // $c_position = $_GET['c_position'];
        // $c_name = $_GET['c_name'];
        // $c_pay = $_GET['c_pay'];
        // $c_room = $_GET['c_room'];
        $userList=userModel::get($userid);
        petitionCModel::Add($start_p, $finish_p, $date_p, $user_id);
        petitionCUserController::index();
    }
}
?>