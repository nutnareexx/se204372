<?php
class considerAjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/considerAj/index_considerAj.php');
    }
}
?>