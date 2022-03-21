<?php
class PagesController
{
    public function home()
    {
        $fList = fileModel::getAll();
        require_once('views/hamburger/index_home.php');
    }
    public function error()
    {

        require_once('views/pages/error.php');
    }
    


    
}
?>