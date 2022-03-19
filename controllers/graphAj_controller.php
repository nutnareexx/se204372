<?php
class graphAjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        require_once('views/graphAj/index_graphAj.php');
    }
}
?>