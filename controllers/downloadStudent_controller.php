<?php
class downloadStudentController
{
    public function index()
    {
        $userid = $_GET['userid'];
        if($userid != "x"){
            $userList=userModel::get($userid);
        }
        require_once('views/downloadStudent/index_downloadStudent.php');
    }
}
?>