<?php
class checkApprovalController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $c = $_GET['petition_id'];
        $petionCList = petitionCModel::get($c);
        $petionCList = petitionCModel::getAll();
        $userList=userModel::get($userid);
        $userList=userModel::getAll();
        $approveList = approveModel::getAll();
        require_once('views/checkApproval/index_checkApproval.php');
    }
}
?>