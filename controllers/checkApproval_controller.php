<?php
class checkApprovalController
{
    public function index()
    {
    
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);

        $checkList = checkApprovalModel::getdc($userid);
        $checkCList = checkApprovalModel::getc($userid);
        $checkDCNameList = checkApprovalModel::getdcName($userid);
        $checkCNameList = checkApprovalModel::getcName($userid);
        $nametitleList = nametitleModel::getAll();
        $uList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        $approveList = approveModel::getAll();
        require_once('views/checkApproval/index_checkApproval.php');
    }

   

}
?>