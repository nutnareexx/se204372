<?php
class downloadStudentController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/downloadStudent/index_downloadStudent.php');
    }
}
?>