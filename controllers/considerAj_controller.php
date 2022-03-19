<?php
class considerAjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        require_once('views/considerAj/index_considerAj.php');
    }
}
?>