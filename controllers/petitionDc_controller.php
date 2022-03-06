<?php
class petitionDcController
{
    public function index()
    {
        $petionDcList = petitionDcModel::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }
}
?>