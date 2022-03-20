<?php
class petitionDcController
{
    public function index()
    {
        $userid = $_GET['userid'];
        // $petition_id = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAll();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function indexDetail()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $p = petitionDcModel::get($petition_id);
        $petionDcList = petitionDcModel::getAll();
        require_once('views/petitionDc/detail_petitionDc.php');

        
    }

    public function indexDetailNoDc() {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $p2 = petitionModelFornew::get($petition_id);
        $pelist = petitionModelFornew::getAll();
        $nametitleList = nametitleModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        require_once('views/petitionDc/detailNoDC.php');
    }

    public function newpetitionDc()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
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
        $userid = $_GET['userid'];
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
        $userList=userModel::get($userid);
        petitionDcModel::Add($dc_id, $petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p, 
        $dc_position,$dc_name, $dc_pay, $dc_room);
        petitionDcController::index();
    }

    public function updateform()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::get($petition_id);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        // $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/updateform.php');

    }

    public function update()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        // $status_id = $_GET['status_id'];
        $userList=userModel::get($userid);
        petitionDcModel::update( $petition_id);
        petitionDcController::index();


    }

    public function updateformNodc()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionDcList = petitionModelFornew::get($petition_id);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/updateformNoDc.php');

    }

    public function updateNodc()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        // $status_id = $_GET['status_id'];
        $userList=userModel::get($userid);
        petitionModelFornew::update( $petition_id);
        petitionDcController::index();


    }

    public function NoupForm() {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::get($petition_id);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        $pelist = petitionModelFornew::getAll();
        petitionDcModel::update2($petition_id);
        require_once('views/petitionDc/NoConfirm.php');
    }

    public function Noup() {
        $numrand = (mt_rand(100,900));
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $app_rea =$_GET['approve_reason'];
        $userList=userModel::get($userid);
        echo $numrand;
        approveModel::Add($numrand, $app_rea);
        $aList = approveModel::get($numrand);
        echo "<br>".$petition_id." ".$numrand."<br>";
        petitionDcModel::updateApp($petition_id,$numrand);
        // petitionDcModel::updateApp()
        petitionDcController::index();
    }

    public function NoupForm2() {
        $userid = $_GET['userid'];
        $dc = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionDcList = petitionModelFornew::get($dc);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        $pelist = petitionModelFornew::getAll();
        petitionDcModel::update2( $dc);
        require_once('views/petitionDc/NoConfirmNC.php');
    }

    public function Noup2() {
        $userid = $_GET['userid'];
        $dc = $_GET['petition_id'];
        $userList=userModel::get($userid);
        
    }

    public function search()
    {
        $userid = $_GET['userid'];
        $key = $_GET['key'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::search($key);
        $petitionFornew = petitionModelFornew::search($key);
        require_once('views/petitionDc/index_petitionDc.php');
    }



}?>