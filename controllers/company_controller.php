<?php
class companyController
{
    public function index()
    {
        $userid = $_GET['userid'];
        if($userid != "x"){
            $userList=userModel::get($userid);
        }
        
        $DetailCompanyList = DetailCompanyModel::getAll();
        require_once('views/detailCompany/index_detailCompany.php');
    }

    public function newDetailCompany()
    {
        $userid = $_GET['userid'];
        if($userid != "x"){
            $userList=userModel::get($userid);
        }
        $DetailCompanyList = DetailCompanyModel::getAll();
        require_once('views/detailCompany/newdetailCompany.php');
    }

    public function addDetailCompany()
    {
        $userid = $_GET['userid'];
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
        $userList=userModel::get($userid);
        DetailCompanyModel::add($dc_name,$dc_position,$dc_department,$dc_num,$dc_skills,$dc_nature,$dc_pay,$dc_room,$dc_benefit,$dc_select);
        companyController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $userid = $_GET['userid'];
        if($userid != "x"){
            $userList=userModel::get($userid);
        }
        $DetailCompanyList = DetailCompanyModel::search($key);
        require_once('views/detailCompany/index_detailCompany.php');
    }


}
?>