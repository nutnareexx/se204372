<?php
class cooperativePController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $cooperativePList = cooperativeModel::getAll();
        require_once('views/cooperativeP/index_cooperativeP.php');
    }

    public function newCooperative()
    {
        $userid = $_GET['userid'];
        $cooperativePList = cooperativeModel::getAll();
        require_once('views/cooperativeP/newCooperativeP.php');
    
    }

    public function addCooperative()
    {
        $userid = $_GET['userid'];
        $c_name = $_GET['c_name'];
        $c_position = $_GET['c_position'];
        $c_department = $_GET['c_department'];
        $c_num = $_GET['c_num'];
        $c_skills = $_GET['c_skills'];
        $c_nature = $_GET['c_nature'];
        $c_pay = $_GET['c_pay'];
        $c_room = $_GET['c_room'];
        $c_benefit = $_GET['c_benefit'];
        $c_select = $_GET['c_select'];
        cooperativeModel::add($c_name,$c_position,$c_department,$c_num,$c_skills,$c_nature,$c_pay,$c_room,$c_benefit,$c_select);
        cooperativePController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $userid = $_GET['userid'];
        $cooperativePList = cooperativeModel::search($key);
        require_once('views/cooperativeP/index_cooperativeP.php');
    }

    public function updateforms()
     {
        $userid = $_GET['userid'];
         $c = $_GET['c_id'];
         $cooperativePList = cooperativeModel::get($c);
         require_once('views/cooperativeP/updateformcooperativeP.php');
     }

     public function update()
     {
        $userid = $_GET['userid'];
        $c_id = $_GET['cid'];
        $c_name = $_GET['c_name'];
        $c_position = $_GET['c_position'];
        $c_department = $_GET['c_department'];
        $c_num = $_GET['c_num'];
        $c_skills = $_GET['c_skills'];
        $c_nature = $_GET['c_nature'];
        $c_pay = $_GET['c_pay'];
        $c_room = $_GET['c_room'];
        $c_benefit = $_GET['c_benefit'];
        $c_select = $_GET['c_select'];
        cooperativeModel::update($c_id,$c_name,$c_position,$c_department,$c_num,$c_skills,$c_nature,$c_pay,$c_room,$c_benefit,$c_select);
        cooperativePController::index();
     }

     public function deleteconfirm()
     {
        $c_id = $_GET['c_id'];
        $userid = $_GET['userid'];
        $cooperativePList = cooperativeModel::get($c_id);
        require_once('./views/cooperativeP/deleteconfirm.php');
     }

     public function delete()
     {
         $cid = $_GET['cid'];
         $userid = $_GET['userid'];
         cooperativeModel::delete($cid);
         cooperativePController::index();
     }
}
?>