<?php
$controllers = array('pages'=>['home','error'],
                     'nisit'=>['index'],
                     'Aj' => ['index'],
                     'company'=>['index','newDetailCompany','addDetailCompany','search','indexDCHome','searchDCHome'],
                     'companyP'=>['indexP','newDetailCompanyP','addDetailCompanyP','searchP','updateformP','updateP','deleteconfirmP','deleteP'],
                     'cooperative'=>['index','newCooperative','addCooperative','search','indexCHome','searchCHome'],
                     'cooperativeP'=>['index','newCooperative','addCooperative','search','updateforms','update', 'deleteconfirm', 'delete'],
                     'petitionC'=>['indexC','indexCshow', 'indexnewCshow', 'updateformC', 'updateformNoC','updateC', 'updateNoC','updateformnewC', 'updateformnewNoC', 'updatenewC', 'updatenewNoC','searchC',
                                    'upY','downY','upD','downD','upS','downS','upY2','downY2','upD2','downD2','upS2','downS2'],
                     'petitionDC'=>['index','indexDetail','indexDetailNoDc','updateform','update','update2', 'updateformNodc','updateNodc','NoupForm',
                                    'NoupForm2', 'Noup','Noup2','search','upY','downY','upD','downD','upA','downA','upY2','downY2','upD2','downD2','upA2','downA2'],
                     'petitionDCUser'=>['index','index2','index3','newpetitionDc', 'addpetitionDc'],
                     'petitionCUser'=> ['index', 'index2','index3','newpetitionC','addpetitionC'],
                     'checkApproval'=> ['index'],
                     'downloadStudent'=> ['index'],
                     'uploadAj'=> ['index'],
                     'user'=>['login','logoutNisit','logoutAj','indexHome','indexLogin'],
                     'test'=>['index']
                    );

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":       require_once("models/fileModel.php");
                            $controller = new PagesController();
                            break;

        case "nisit":       require_once("models/fileModel.php");
                            require_once("models/userModel.php");
                            $controller = new nisitController();
                            break;


        case "Aj":          require_once("models/fileModel.php");
                            require_once("models/userModel.php");
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
                            //require_once("models/addDcUser.php");
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
                            
        case "checkApproval":   require_once("models/petitionDcModel.php");
                                require_once("models/petitionCModel.php");
                                require_once("models/approveModel.php");
                                require_once("models/nametitleModel.php");
                                require_once("models/userModel.php");
                                require_once("models/statusModel.php");
                                require_once("models/companyModel.php");
                                require_once("models/cooperativeModel.php");
                                require_once("models/checkApprovalModel.php");
                                $controller = new checkApprovalController();
                                break;                     
        
        case "downloadStudent": require_once("models/userModel.php"); 
                                $controller = new downloadStudentController();
                                break; 
 

        case "uploadAj":    require_once("models/userModel.php");
                            require_once("models/fileModel.php");
                            $controller = new uploadAjController();
                            break; 
                        
        case "user":        require_once("models/userModel.php");
                            require_once("models/fileModel.php");
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