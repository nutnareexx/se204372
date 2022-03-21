<?php
class userController{

    public function login(){
        $userid = $_GET['userid'];
        $password = $_GET['password'];
        $userList=userModel::get($userid);
        $userList = userModel::getAll();
        

        echo "<br>username : ".$userid."<br>password :".$password."<br>";

        $c=0;
        foreach($userList as $u){
            if($u->user_id == $userid){
                echo "check userid";
                $c=1;
                break;
            }
        }

        if($c==1){
            $checkList = userModel::get($userid);
            if($checkList->user_password == $password){
                echo "<br> submit success <br>";
                $userList =userModel::get($userid);
                if($userid == 'aj'){
                    require_once('views/hamburger/index_hamburgerAj.php');
                }
                else{
                    
                require_once("views/hamburger/index_hamburger.php");
                }
                
            }
            else{
                echo "<br> password worng <br>";
            }
        }
        else{
            echo "<br> Don't have user <br>";
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
        
        
        require_once('views/hamburger/index_home.php');
    }

    public function indexLogin(){

        require_once('views/login/index_login.php');
    }

}
?>