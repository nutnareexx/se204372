<?php
class uploadAjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/uploadAj/index_uploadAj.php');
    }
}
?>