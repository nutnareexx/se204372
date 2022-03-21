<?php
class PagesController
{
    public function home()
    {
        require_once('views/hamburger/index_home.php');
    }
    public function error()
    {

        require_once('views/pages/error.php');
    }
    


    
}
?>