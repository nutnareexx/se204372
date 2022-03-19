<?php
$controllers = array('pages'=>['home','error'],'nisit'=>['index'],
                     'Aj' => ['index'],
                     'company'=>['index','newDetailCompany','addDetailCompany','search'],
                     'companyP'=>['indexP','newDetailCompanyP','addDetailCompanyP','searchP','updateformP','updateP','deleteconfirmP','deleteP'],
                     'cooperative'=>['index','newCooperative','addCooperative','search'],
                     'cooperativeP'=>['index','newCooperative','addCooperative','search','updateforms','update', 'deleteconfirm', 'delete'],
                     'petitionDC'=>['index','indexDetail','indexDetailNoDc','updateform','update', 'deleteconfirm', 'delete','search'],
                     'petitionC'=>['indexC','indexCshow', 'indexnewCshow', 'updateformC','updateC','deleteconfirmC','deleteC','searchC'],
                     'petitionDCUser'=>['index','index2','newpetitionDc', 'addpetitionDc'],
                     'petitionCUser'=> ['index', 'index2','newpetitionC','addpetitionC'],
                     'checkApproval'=> ['index'],
                     'downloadStudent'=> ['index'],
                     'uploadStudent'=> ['index'],
                     'considerAj'=> ['index'],
                     'graphAj'=> ['index'],
                     'reportPetition'=> ['index'],
                     'bookAj'=> ['index'],
                     'checkHistory'=> ['index'],
                     'uploadAj'=> ['index'],
                     'user'=>['login','logoutNisit','logoutAj']
                    );

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":       $controller = new PagesController();
                            break;

        case "nisit":       require_once("models/userModel.php");
                            $controller = new nisitController();
                            break;


        case "Aj":          require_once("models/userModel.php");
                            $controller = new AjController();
                            break;

        case "company":     require_once("models/userModel.php");
                            require_once("models/companyModel.php");
                            $controller = new companyController();
                            break;

        case "companyP":    require_once("models/userModel.php");
                            require_once("models/companyModel.php");
                            $controller = new companyPController();
                            break;

        case "petitionDC":  require_once("models/petitionDcModel.php");
                            require_once("models/approveModel.php");
                            require_once("models/nametitleModel.php");
                            require_once("models/userModel.php");
                            require_once("models/statusModel.php");
                            require_once("models/companyModel.php");
                            require_once("models/cooperativeModel.php");
                            require_once("models/petitionDcModel2.php");
                            $controller = new petitionDcController();
                            break;

        case "petitionC":   require_once("models/petitionCModel.php");
                            require_once("models/approveModel.php");
                            require_once("models/nametitleModel.php");
                            require_once("models/userModel.php");
                            require_once("models/statusModel.php");
                            require_once("models/companyModel.php");
                            require_once("models/cooperativeModel.php");
                            require_once("models/petitionnewCModel.php");
                            $controller = new petitionCController();
                            break;                 

        case "petitionDCUser":  require_once("models/petitionDcModel.php");
                            require_once("models/approveModel.php");
                            require_once("models/nametitleModel.php");
                            require_once("models/userModel.php");
                            require_once("models/statusModel.php");
                            require_once("models/companyModel.php");
                            require_once("models/cooperativeModel.php");
                            $controller = new petitionDcUserController();
                            break;  
                            
        case "petitionCUser":   require_once("models/petitionCModel.php");
                                require_once("models/approveModel.php");
                                require_once("models/nametitleModel.php");
                                require_once("models/userModel.php");
                                require_once("models/statusModel.php");
                                require_once("models/companyModel.php");
                                require_once("models/cooperativeModel.php"); 
                                $controller = new petitionCUserController();
                                break;  
        
        case "cooperative": require_once("models/userModel.php");
                            require_once("models/cooperativeModel.php");
                            $controller = new cooperativeController();
                            break; 
                            
        case "cooperativeP":require_once("models/userModel.php");
                            require_once("models/cooperativeModel.php");
                            $controller = new cooperativePController();
                            break;    
                            
        case "checkApproval":  require_once("models/userModel.php");
                                $controller = new checkApprovalController();
                            break;                     
        
        case "downloadStudent": require_once("models/userModel.php"); 
                                $controller = new downloadStudentController();
                            break; 

        case "uploadStudent":   require_once("models/userModel.php");
                                $controller = new uploadStudentController();
                            break; 

        case "considerAj":  require_once("models/userModel.php");
                            $controller = new considerAjController();
                            break; 

        case "graphAj":     require_once("models/userModel.php");
                            $controller = new graphAjController();
                            break; 

        case "reportPetition":require_once("models/userModel.php");  
                            $controller = new reportPetitionController();
                            break; 

        case "bookAj":      require_once("models/userModel.php");
                            $controller = new bookAjController();
                            break; 

        case "checkHistory":  require_once("models/userModel.php");
                                $controller = new checkHistoryController();
                            break; 

        case "uploadAj":    require_once("models/userModel.php");
                            $controller = new uploadAjController();
                            break; 
                        
        case "user":        require_once("models/userModel.php");
                            $controller = new userController();
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