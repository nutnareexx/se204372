<?php
class PagesController
{
    public function home()
    {
        require_once('views/login/index_login.php');
    }
    public function error()
    {
        require_once('views/pages/error.php');
    }
    


    
}
?>