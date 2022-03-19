<?php
class reportPetitionController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/reportPetition/index_reportPetition.php');
    }
}
?>