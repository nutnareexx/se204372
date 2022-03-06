<?php
class petitionDcController
{
    public function index()
    {
        $petionDcList = petitionDcModel::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }

    public function newpetitionDc()
    {
        $petionDcList = petitionDcModel::getAll();
        $approveList = approveModel::getAll();
        $statusList = statusModel::getAll();
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        require_once('views/petitionDc/newpetitionDc.php');
    }
}
?>