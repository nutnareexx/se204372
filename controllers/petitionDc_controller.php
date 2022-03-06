<?php
class petitionDcController
{
    public function index()
    {
        $pettionDcList = petitionDcModel::getAll();
        require_once('views/petitionDc/index_petitionDc.php');
    }
}
?>