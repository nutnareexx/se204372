<?php
class bookAjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/bookAj/index_bookAj.php');
    }
}
?>