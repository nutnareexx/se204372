<?php
class cooperativeController
{
    public function index()
    {
        $cooperativeList = cooperativeModel::getAll();
        require_once('views/cooperative/index_cooperative.php');
    }

    public function newCooperative()
    {
        $cooperativeList = cooperativeModel::getAll();
        require_once('views/cooperative/newCooperative.php');
    
    }

    public function addCooperative()
    {
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
        cooperativeController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        
        $cooperativeList = cooperativeModel::search($key);
        require_once('views/cooperative/index_cooperative.php');
    }
}
?>