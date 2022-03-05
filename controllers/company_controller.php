<?php
class companyController
{
    public function index()
    {
        $DetailCompanyList = DetailCompanyModel::getAll();
        require_once('views/detailCompany/index_detailCompany.php');
    }
}
?>