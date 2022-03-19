<?php
class uploadStudentController
{
    public function index()
    {
        $userid = $_GET['userid'];
        require_once('views/uploadStudent/index_uploadStudent.php');
    }
}
?>