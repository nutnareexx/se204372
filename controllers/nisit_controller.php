<?php
class nisitController{
    
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/hamburger/index_hamburger.php');
    }
}
?>