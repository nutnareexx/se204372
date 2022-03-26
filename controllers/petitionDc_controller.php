<?php
class petitionDcController
{
    public function index()
    {
        $userid = $_GET['userid'];
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
        $statusList = statusModel::getAll();
        $nametitleList = nametitleModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
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
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        require_once('views/petitionDc/updateform.php');

    }

    public function update()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $userList=userModel::get($userid);
        petitionDcModel::update( $petition_id);
        petitionDcController::index();


    }

    public function updateformNodc()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $userList = userModel::get($userid);
        $petionDcList = petitionModelFornew::get($petition_id);
        $nametitleList = nametitleModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/updateformNoDc.php');

    }

    public function updateNodc()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
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
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/NoConfirm.php');
    }

    public function Noup() {
        $numrand = (mt_rand(100,999));
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $app_rea =$_GET['approve_reason'];
        $userList=userModel::get($userid);
        petitionDcModel::update2($petition_id);
        approveModel::Add($numrand, $app_rea);
        $aList = approveModel::get($numrand);
        petitionDcModel::updateApp($petition_id,$numrand);
        petitionDcController::index();
    }

    public function NoupForm2() {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionDcList = petitionModelFornew::get($petition_id);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/NoConfirmNC.php');
    }

    public function Noup2() {
        $numrand = (mt_rand(100,999));
        $userid = $_GET['userid'];
        $petition_id = $_GET['petition_id'];
        $app_rea =$_GET['approve_reason'];
        $userList=userModel::get($userid);
        petitionDcModel::update2($petition_id);
        approveModel::Add($numrand, $app_rea);
        $aList = approveModel::get($numrand);
        petitionDcModel::updateApp($petition_id,$numrand);
        petitionDcController::index();
        
    }

    public function search()
    {
        $userid = $_GET['userid'];
        $key = $_GET['key'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::search($key);
        $pelist = petitionModelFornew::search($key);
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function upY() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAllupY();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function downY() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAlldownY();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function upD() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAllupD();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function downD() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAlldownD();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function upA() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAllupA();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function downA() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAlldownA();
        $pelist = petitionModelFornew::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function upY2() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAll();
        $pelist = petitionModelFornew::getAllupY();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function downY2() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAll();
        $pelist = petitionModelFornew::getAlldownY();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function upD2() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAll();
        $pelist = petitionModelFornew::getAllupD();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function downD2() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAll();
        $pelist = petitionModelFornew::getAlldownD();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function upA2() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAll();
        $pelist = petitionModelFornew::getAllupA();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function downA2() {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getAll();
        $pelist = petitionModelFornew::getAlldownA();
        require_once('views/petitionDc/index_petitionDc.php');
    }


}?>