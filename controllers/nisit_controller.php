<?php
class nisitController{
    
    public function index()
    {
<<<<<<< Updated upstream
        $userid = $_GET['userid'];
=======
        $userid=$_GET['userid'];
        $userList=userModel::get($userid);
>>>>>>> Stashed changes
        require_once('views/hamburger/index_hamburger.php');
    }
}
?>