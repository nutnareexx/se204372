<?php
class companyPController
{
    public function indexP()
    {
        $DetailCompanyPList = DetailCompanyModel::getAll();
        require_once('views/detailCompanyP/index_detailCompanyP.php');
    }

    public function newDetailCompanyP()
    {
        $DetailCompanyPList = DetailCompanyModel::getAll();
        require_once('views/detailCompanyP/newdetailCompanyP.php');
    }

    public function addDetailCompanyP()
    {
        $dc_name = $_GET['dc_name'];
        $dc_position = $_GET['dc_position'];
        $dc_department = $_GET['dc_department'];
        $dc_num = $_GET['dc_num'];
        $dc_skills = $_GET['dc_skills'];
        $dc_nature = $_GET['dc_nature'];
        $dc_pay = $_GET['dc_pay'];
        $dc_room = $_GET['dc_room'];
        $dc_benefit = $_GET['dc_benefit'];
        $dc_select = $_GET['dc_select'];
        DetailCompanyModel::add($dc_name,$dc_position,$dc_department,$dc_num,$dc_skills,$dc_nature,$dc_pay,$dc_room,$dc_benefit,$dc_select);
        companyPController::indexP();
    }

    public function searchP()
    {
        $key = $_GET['key'];
        $DetailCompanyPList = DetailCompanyModel::search($key);
        require_once('views/detailCompanyP/index_detailCompanyP.php');
    }

    public function updateformP()
    {
       
        $dc = $_GET['dc_id'];
        $DetailCompanyPList = DetailCompanyModel::get($dc);
        require_once('views/detailCompanyP/updateformP.php');

    }

    public function updateP()
    {
        
        $dcid = $_GET['dcid'];
        $dc_name = $_GET['dc_name'];
        $dc_position = $_GET['dc_position'];
        $dc_department = $_GET['dc_department'];
        $dc_num = $_GET['dc_num'];
        $dc_skills = $_GET['dc_skills'];
        $dc_nature = $_GET['dc_nature'];
        $dc_pay = $_GET['dc_pay'];
        $dc_room = $_GET['dc_room'];
        $dc_benefit = $_GET['dc_benefit'];
        $dc_select = $_GET['dc_select'];
        DetailCompanyModel::update($dcid,$dc_name,$dc_position,$dc_department,$dc_num,
        $dc_skills,$dc_nature,$dc_pay,$dc_room,$dc_benefit,$dc_select);
        companyPController::indexP();
    }

    public function deleteconfirmP()
    {
       $dc_id = $_GET['dc_id'];
       $DetailCompanyPList =  DetailCompanyModel::get($dc_id);
       require_once('./views/detailCompanyP/deleteconfirmP.php');
    }

    public function deleteP()
    {
        $dcid = $_GET['dcid'];
        DetailCompanyModel::delete($dcid);
        companyPController::indexP();
    }


}
?>