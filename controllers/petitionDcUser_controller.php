<?php
class petitionDcUserController
{
    public function index()
    {
        $userid = $_GET['userid'];
        // $petionDcList = petitionDcModel::getAll();
        $nametitleList  = nametitleModel::getAll();
        $userList = userModel::get($userid);
        // echo $userid;
        require_once('views/petitionDcUser/index_petitionDcUser.php');
    }

    public function index2()
    {
        $date = $_GET['date'];
        $y = $_GET['y'];
        $userid = $_GET['userid'];
        // $phone = $_GET['phone'];
        // $faceB = $_GET['facebook'];
        // $position = $_GET['dc_position'];
        $company = $_GET['company'];
        $comList = DetailCompanyModel::getAll();
        $userList = userModel::get($userid);

        echo $userid.$company;
        require_once('views/petitionDcUser/index2_Dcuser.php');
    }

    
    public function addpetitionDc()
    {
        echo "<br>addp<br>";
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
            $company_id = $_GET['company_id'];
            echo $company_id;
            petitionDcModel::addDC_old($date,$userid,$y,$faceB,$phone,$position,$approve_name,$approve_lastname,$approve_position,$company_id,$company_no,$company_road,$company_sub,$company_dis,$company_prov,$company_code,$hr_name,$hr_lastname,$hr_phone,$hr_mail,$pay,$room,$start,$finish);
        }
        if(isset($_GET['dc_name'])){
            $company_name = $_GET['dc_name'];
            echo $company_name;
            petitionDcModel::addDC_new($date,$userid,$y,$faceB,$phone,$position,$approve_name,$approve_lastname,$approve_position,$company_name,$company_no,$company_road,$company_sub,$company_dis,$company_prov,$company_code,$hr_name,$hr_lastname,$hr_phone,$hr_mail,$pay,$room,$start,$finish);
        }
        
        

    }
    public function newpetitionDc()
        {
            $userid = $_GET['userid'];
            $userList=userModel::get($userid);
            $petionDcList = petitionDcModel::getAll();
            //$approveList = approveModel::getAll();
            $statusList = statusModel::getAll();
            $nametitleList = nametitleModel::getAll();
            //$userList = userModel::getAll();
            $DetailCompanyList = DetailCompanyModel::getAll();
            //$cooperativeList =  cooperativeModel::getAll();
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