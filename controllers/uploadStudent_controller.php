<?php
class uploadStudentController
{
    public function index()
    {
        $userid = $_GET['userid'];
        if($userid != "x"){
            $userList=userModel::get($userid);
        }
        require_once('views/uploadStudent/index_uploadStudent.php');
    }
}
?>