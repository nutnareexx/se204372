<?php
class checkApprovalController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/checkApproval/index_checkApproval.php');
    }
}
?>