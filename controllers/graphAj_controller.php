<?php
class graphAjController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/graphAj/index_graphAj.php');
    }
}
?>