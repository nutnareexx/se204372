<?php
class AjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        require_once('views/hamburger/index_hamburgerAj.php');
    }
}
?>