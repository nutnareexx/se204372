<?php
class checkApprovalController
{
    public function index()
    {
    
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);

        $checkList = checkApprovalModel::getdc($userid);
        $checkCList = checkApprovalModel::getc($userid);
        $nametitleList = nametitleModel::getAll();
        $uList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        require_once('views/checkApproval/index_checkApproval.php');
    }

   

}
?>