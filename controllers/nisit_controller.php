<?php
class nisitController{
    
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        require_once('views/hamburger/index_hamburger.php');
    }
}
?>