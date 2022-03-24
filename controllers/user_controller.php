<?php
class userController{

    public function login(){
        $userid = $_GET['userid'];
        $password = $_GET['password'];
        $userList=userModel::get($userid);
        $userList = userModel::getAll();
        

        $c=0;
        foreach($userList as $u){
            if($u->user_id == $userid){
                
                $c=1;
                break;
            }
        }

        if($c==1){
            $checkList = userModel::get($userid);
            if($checkList->user_password == $password){
                
                $userList =userModel::get($userid);
                if($userid == 'aj'){
                    $fList = fileModel::getAll();
                    require_once('views/hamburger/index_hamburgerAj.php');
                }
                else{
                    $fList = fileModel::getAll();
                    require_once("views/hamburger/index_hamburger.php");
                }
                
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('username หรือ password ไม่ถูกต้อง');";
                echo "window.location.assign('http://localhost/se204372/index.php?controller=user&action=indexLogin');";
                echo "</script>";
            }
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('username หรือ password ไม่ถูกต้อง');";
            echo "window.location.assign('http://localhost/se204372/index.php?controller=user&action=indexLogin');";
            echo "</script>";
        }

    }

    public function logoutNisit()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        require_once('views/login/logout_nisit.php');
    }
    public function logoutAj()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        require_once('views/login/logout_Aj.php');
      
    }

    public function indexHome()
    {
        
        $fList = fileModel::getAll();
        require_once('views/hamburger/index_home.php');
    }

    public function indexLogin(){

        require_once('views/login/index_login.php');
    }

}
?>