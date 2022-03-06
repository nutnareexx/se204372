<?php
$controllers = array('pages'=>['home','error'],
                     'company'=>['index']
                    );

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages": $controller = new PagesController();
                      break;

        case "company": require_once("models/companyModel.php");
                        $controller = new companyController();
                        break;

        case "petition": require_once("models/petitionDcMoodel.php");
                         $controller = new petitionDcController();
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