<?php
class petitionCUserController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        // $nametitleList  = nametitleModel::getAll();
        require_once('views/petitionCUser/index_petitionCUser.php');
    }

    public function index2()
    {
        $date = $_GET['date'];
        $y = $_GET['y'];
        $userid = $_GET['userid'];
        $company = $_GET['company'];
        $comList = cooperativeModel::getAll();
        $userList = userModel::get($userid);
        require_once('views/petitionCUser/index2_petitionCUser.php');
    }
    public function index3()
    {
        $date = $_GET['p_date'];
        $y = $_GET['y'];
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
            // petitionCModel::addC_old($date,$userid,$y,$faceB,$phone,$position,$approve_name,$approve_lastname,$approve_position,$company_id,$company_no,$company_road,$company_sub,$company_dis,$company_prov,$company_code,$hr_name,$hr_lastname,$hr_phone,$hr_mail,$pay,$room,$start,$finish);
        }
        if(isset($_GET['dc_name'])){
            $company_name = $_GET['dc_name'];
            echo $company_name;
            // petitionCModel::addC_new($date,$userid,$y,$faceB,$phone,$position,$approve_name,$approve_lastname,$approve_position,$company_name,$company_no,$company_road,$company_sub,$company_dis,$company_prov,$company_code,$hr_name,$hr_lastname,$hr_phone,$hr_mail,$pay,$room,$start,$finish);
        }
        $comList = DetailCompanyModel::getAll();
        $userList = userModel::get($userid);
        require_once('views/petitionCUser/index3_Cuser.php');
    }

    public function newpetitionC()
    {
        $userid = $_GET['userid'];
        $userList=userModel::get($userid);
        $petionCList = petitionCModel::getAll();
        //$approveList = approveModel::getAll();
        $statusList = statusModel::getAll();
        $nametitleList = nametitleModel::getAll();
        //$userList = userModel::getAll();
        $DetailCompanyList = DetailCompanyModel::getAll();
        //$cooperativeList =  cooperativeModel::getAll();
        require_once('views/petitionCUser/newpetitionC.php');
    }

    public function addpetitionC()
    {
        echo "<br>addp<br>";
        $date = $_GET['p_date'];
        $y = $_GET['y'];
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
            petitionCModel::addC_old($date,$userid,$y,$faceB,$phone,$position,$approve_name,$approve_lastname,$approve_position,$company_id,$company_no,$company_road,$company_sub,$company_dis,$company_prov,$company_code,$hr_name,$hr_lastname,$hr_phone,$hr_mail,$pay,$room,$start,$finish);
        }
        if(isset($_GET['dc_name'])){
            $company_name = $_GET['dc_name'];
            echo $company_name;
            petitionCModel::addC_new($date,$userid,$y,$faceB,$phone,$position,$approve_name,$approve_lastname,$approve_position,$company_name,$company_no,$company_road,$company_sub,$company_dis,$company_prov,$company_code,$hr_name,$hr_lastname,$hr_phone,$hr_mail,$pay,$room,$start,$finish);
        }
    }
}
?>