<?php
$controllers = array('pages'=>['home','error'],
                     'hamburger' => ['index'],
                     'company'=>['index','newCompany'],
                     'cooperative'=>['index','addCooperative','search'],
                     'petitionDC'=>['index','updateform','update', 'deleteconfirm', 'delete'],
                     'petitionDCUser'=>['index', 'newpetitionDc', 'addpetitionDc']
                    );

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":       $controller = new PagesController();
                            break;

        case "hamburger":   $controller = new hamburgerController();
                            break;

        case "company":     require_once("models/companyModel.php");
                            $controller = new companyController();
                            break;

        case "petitionDC":  require_once("models/petitionDcMoodel.php");
                            require_once("models/approveModel.php");
                            require_once("models/nametitleModel.php");
                            require_once("models/userModel.php");
                            require_once("models/statusModel.php");
                            require_once("models/companyModel.php");
                            require_once("models/cooperativeModel.php");
                            $controller = new petitionDcController();
                            break;

        case "petitionDCUser":  require_once("models/petitionDcMoodel.php");
                            require_once("models/approveModel.php");
                            require_once("models/nametitleModel.php");
                            require_once("models/userModel.php");
                            require_once("models/statusModel.php");
                            require_once("models/companyModel.php");
                            require_once("models/cooperativeModel.php");
                            $controller = new petitionDcUserController();
                            break;                    
        
        case "cooperative": require_once("models/cooperativeModel.php");
                            $controller = new cooperativeController();
                            break;                
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action);
    }
    else{
        call('pages','error');
    }
}
else{
    call('pages','error');
}
?>