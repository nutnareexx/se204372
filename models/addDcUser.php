<?php
class DcUser{
    public $petition_id;
    public $date_p;
    public $user_id;
    public $FB_p;
    public $phone_p;
    public $position_p;
    public $approverName_p;
    public $approverSname_p;
    public $approverP_p;
    public $com_id_name;
    public $compNo_p;
    public $compRoad_p;
    public $compSubdist_p;
    public $compDistrict_p;
    public $compProvince_p;
    public $compPost_p;
    public $hrName_p;
    public $hrSname_p;
    public $hrPhone_p;
    public $hrMail_p;
    public $salary_p;
    public $room_p;
    public $type_p;
    public $start_p;
    public $finish_p; 
    public $status_id;
    public $academicY_p;

    public function __construct($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
    $com_id_name, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
    $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id,$academicY_p)
    {
        $this->petition_id = $petition_id;
        $this->date_p =  $date_p;
        $this->user_id = $user_id;
        $this->FB_p = $FB_p;
        $this->phone_p = $phone_p;
        $this->position_p = $position_p;
        $this->approverName_p = $approverName_p;
        $this->approverSname_p = $approverSname_p;
        $this->approverP_p = $approverP_p;
        $this->com_id_name = $com_id_name;
        $this->compNo_p = $compNo_p; 
        $this->compRoad_p = $compRoad_p;
        $this->compSubdist_p = $compSubdist_p;
        $this->compDistrict_p = $compDistrict_p;
        $this->compProvince_p = $compProvince_p;
        $this->compPost_p = $compPost_p;
        $this->hrName_p = $hrName_p;
        $this->hrSname_p = $hrSname_p;
        $this->hrPhone_p = $hrPhone_p;
        $this->hrMail_p = $hrMail_p;
        $this->salary_p = $salary_p;
        $this->room_p = $room_p;
        $this->type_p = $type_p;
        $this->start_p = $start_p;
        $this->finish_p = $finish_p; 
        $this->status_id = $status_id;
        $this->academicY_p = $academicY_p;
    }

    public static function addOldDC($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
    $com_id_name, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
    $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id,$academicY_p){
        require("connection_connect.php");
        $sql = "INSERT INTO `petition`( `date_p`, `user_id`, `academicY_p`,`FB_p`, `phone_p`,`position_p`, 
                                        `approverName_p`, `approverSname_p`, `approverP_p`, 
                                        `dc_id`, `compNo_p`, `compRoad_p`, `compSubdist_p`, `compDistrict_p`, `compProvince_p`, `compPost_p`, 
                                        `hrName_p`, `hrSname_p`, `hrPhone_p`, `hrMail_p`, 
                                        `salary_p`, `room_p`, `type_p`, `start_p`, `finish_p`, `status_id` ,`file_p`) 
                                VALUES ('$date','$userid','$y','$faceB','$phone','$position',
                                        '$approve_name','$approve_lastname',',$approve_position',
                                        '$com_id_name','$company_no','$company_road','$company_sub','$company_dis','$company_prov','$company_code',
                                        '$hr_name','$hr_lastname','$hr_phone','$hr_mail',
                                        '$pay','$room','dc','$start','$finish','01','$newname')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "success";
    }

    public static function addNewDC (){
        require("connection_connect.php");
        $sql = "INSERT INTO `petition`( `date_p`, `user_id`, `academicY_p`,`FB_p`, `phone_p`, `position_p`,
                                        `approverName_p`, `approverSname_p`, `approverP_p`, 
                                        `comName_p`, `compNo_p`, `compRoad_p`, `compSubdist_p`, `compDistrict_p`, `compProvince_p`, `compPost_p`, 
                                        `hrName_p`, `hrSname_p`, `hrPhone_p`, `hrMail_p`, 
                                        `salary_p`, `room_p`, `type_p`, `start_p`, `finish_p`, `status_id` ,`file_p`) 
                                VALUES ('$date','$userid','$y','$faceB','$phone','$position',
                                        '$approve_name','$approve_lastname','$approve_position',
                                        '$company_name','$company_no','$company_road','$company_sub','$company_dis','$company_prov','$company_code',
                                        '$hr_name','$hr_lastname','$hr_phone','$hr_mail',
                                        '$pay','$room','dc','$start','$finish','01','$newname')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "success";
    }

} 
?>