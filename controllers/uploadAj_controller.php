<?php
class uploadAjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $fList = fileModel::getAll();
        require_once('views/uploadAj/index_uploadAj.php');
    }
}
?>