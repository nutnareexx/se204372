<?php
class AjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/hamburger/index_hamburgerAj.php');
    }
}
?>