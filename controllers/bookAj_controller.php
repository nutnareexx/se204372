<?php
class bookAjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        require_once('views/bookAj/index_bookAj.php');
    }
}
?>