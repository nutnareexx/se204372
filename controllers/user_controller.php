<?php
class userController{

    public function login(){
        $userid = $_GET['userid'];
        $password = $_GET['password'];

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
            }
            else{
                echo "<br> password worng <br>";
            }
        }
        else{
            echo "<br> Don't have user <br>";
        }





    }
}
?>