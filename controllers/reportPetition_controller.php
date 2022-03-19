<?php
class reportPetitionController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        require_once('views/reportPetition/index_reportPetition.php');
    }
}
?>