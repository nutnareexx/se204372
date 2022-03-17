<?php
class userController{

    public function login(){
        $userid = $_GET['userid'];
        $password = $_GET['password'];

        $uList = userModel::getAll();

        echo $userid.$password;

    }
}
?>