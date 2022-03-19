<?php
class checkApprovalController
{
    public function index()
    {
        //$userid = $_GET['userid'];
        //$c = $_GET['petition_id'];
        //$petionCList = petitionCModel::get($c);
        //$petionCList = petitionCModel::getAll();
        //$userList=userModel::get($userid);
        //$userList=userModel::getAll();
        //$approveList = approveModel::getAll();
        //$statusList = statusModel::getAll();
        //$DetailCompanyList = DetailCompanyModel::getAll();
        //$cooperativeList =  cooperativeModel::getAll();

        $userid = $_GET['userid'];
        
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::getid($userid);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        require_once('views/checkApproval/index_checkApproval.php');
    }
}
?>