<?php
class checkHistoryController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/checkHistory/index_checkHistory.php');
    }
}
?>