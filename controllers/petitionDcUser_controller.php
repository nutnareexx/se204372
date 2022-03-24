<?php
class petitionDcUserController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $nametitleList  = nametitleModel::getAll();
        $userList = userModel::get($userid);
        require_once('views/petitionDcUser/index_petitionDcUser.php');
    }

    public function index2()
    {
        $date = $_GET['date'];
        $y = $_GET['y'];
        $userid = $_GET['userid'];
        $company = $_GET['company'];
        $comList = DetailCompanyModel::getAll();
        $userList = userModel::get($userid);
        require_once('views/petitionDcUser/index2_Dcuser.php');
    }

    public function index3(){
        $date = $_GET['p_date'];
        $y =$_GET['y'];
        $userid = $_GET['userid'];
        $phone = $_GET['phone'];
        $faceB = $_GET['facebook'];
        $position = $_GET['dc_position'];

        $approve_name = $_GET['name_com'];
        $approve_lastname = $_GET['lastname_com'];
        $approve_position = $_GET['position'];

        $company_no = $_GET['no'];
        $company_road = $_GET['road'];
        $company_sub = $_GET['Subdistrict'];
        $company_dis = $_GET['district'];
        $company_prov = $_GET['province'];
        $company_code = $_GET['postcode'];

        $hr_name = $_GET['namehr'];
        $hr_lastname = $_GET['lastnamehr'];
        $hr_phone = $_GET['phonehr'];
        $hr_mail = $_GET['mailhr'];

        $start = $_GET['start_p'];
        $finish = $_GET['finish_p'];
        $pay = $_GET['pay'];
        $room = $_GET['room'];
        $userList=userModel::get($userid);

        if(isset($_GET['company_id'])){
            $c="cid";
            $company_id = $_GET['company_id'];
            $comList = DetailCompanyModel::get($company_id);
        }
        if(isset($_GET['dc_name'])){
            $c="name";
            $company_name = $_GET['dc_name'];
        }
        
        require_once('views/petitionDcUser/index3_Dcuser.php');

    }

    
    public function addpetitionDc()
    {
        $date = $_GET['p_date'];
        $y =$_GET['y'];
        $userid = $_GET['userid'];
        $phone = $_GET['phone'];
        $faceB = $_GET['facebook'];
        $position = $_GET['dc_position'];

        $approve_name = $_GET['name_com'];
        $approve_lastname = $_GET['lastname_com'];
        $approve_position = $_GET['position'];


        $company_no = $_GET['no'];
        $company_road = $_GET['road'];
        $company_sub = $_GET['Subdistrict'];
        $company_dis = $_GET['district'];
        $company_prov = $_GET['province'];
        $company_code = $_GET['postcode'];

        $hr_name = $_GET['namehr'];
        $hr_lastname = $_GET['lastnamehr'];
        $hr_phone = $_GET['phonehr'];
        $hr_mail = $_GET['mailhr'];

        $start = $_GET['start_p'];
        $finish = $_GET['finish_p'];
        $pay = $_GET['pay'];
        $room = $_GET['room'];
        $userList=userModel::get($userid);

        $file_name = $_GET['file_name'];
        
        if(isset($_GET['company_id'])){
            $company_id = $_GET['company_id'];
        }
        if(isset($_GET['dc_name'])){
            $company_name = $_GET['dc_name'];
        }
        
        

    }
    public function newpetitionDc()
        {
            $userid = $_GET['userid'];
            $userList=userModel::get($userid);
            $petionDcList = petitionDcModel::getAll();
            $statusList = statusModel::getAll();
            $nametitleList = nametitleModel::getAll();
            $DetailCompanyList = DetailCompanyModel::getAll();
            require_once('views/petitionDcUser/newpetitionDc.php');
        }

    public function updateform()
    {
        $userid = $_GET['userid'];
        $dc = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::get($dc);
        $nametitleList = nametitleModel::getAll();
        $userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        $statusList = statusModel::getAll();
        require_once('views/petitionDc/updateform.php');

    }

    public function update()
    {
        $userid = $_GET['userid'];
        $petition_id = $_GET['petitionid'];
        $status_id = $_GET['status_id'];
        $userList=userModel::get($userid);
        petitionDcModel::update( $petition_id, $status_id);
        petitionDcUserController::index();
    }

    public function deleteconfirm()
    {
        $userid = $_GET['userid'];
        $dc = $_GET['petition_id'];
        $userList=userModel::get($userid);
        $petionDcList = petitionDcModel::get($dc);
        require_once('views/petitionDc/deleteconfirm.php');

    }

    public function delete()
    {
        $userid = $_GET['userid'];
        $petitionid = $_GET['petitionid'];
        $userList=userModel::get($userid);
        petitionDcModel::delete($petitionid);
        petitionDcUserController::index();
    }



}?>