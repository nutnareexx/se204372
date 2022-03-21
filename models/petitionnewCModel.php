<?php
class petitionnewCModel{
    public $petition_id;
    public $date_p;
    public $user_id;
    public $academicY_p;
    public $FB_p;
    public $phone_p;
    public $position_p;
    public $approverName_p;
    public $approverSname_p;
    public $approverP_p;
    public $comName_p;
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

    public $name_title;
    public $user_name;
    public $user_surname;
    public $status_name;
    

    public $approve_id;
   
    
 

    public function __construct($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
    $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
    $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name, 
    $academicY_p, $approve_id)
    {
        $this->petition_id = $petition_id;
        $this->date_p =  $date_p;
        $this->user_id = $user_id;
        $this->academicY_p = $academicY_p;
        $this->FB_p = $FB_p;
        $this->phone_p = $phone_p;
        $this->position_p = $position_p;
        $this->approverName_p = $approverName_p;
        $this->approverSname_p = $approverSname_p;
        $this->approverP_p = $approverP_p;
        $this->comName_p = $comName_p; 
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

        $this->name_title = $name_title;
        $this->user_name = $user_name;
        $this->user_surname = $user_surname;
        $this->status_name = $status_name;
        

        $this->approve_id = $approve_id;
        
       
        
        
    }

    

    public static function getnew($petition_id)
    {
        
        require("connection_connect.php");
        $sql = "SELECT p.petition_id, DATE_FORMAT(p.date_p,'%d/%m/%Y') AS dt, p.academicY_p, p.user_id, nt.name_title, u.user_name, 
        u.user_surname, p.FB_p, p.phone_p, p.position_p, p.approverName_p, p.approverSname_p, p.approverP_p, p.comName_p, 
        p.compNo_p, p.compRoad_p, p.compSubdist_p, p.compDistrict_p, p.compProvince_p, p.compPost_p, p.hrName_p, p.hrSname_p, 
        p.hrPhone_p, p.hrMail_p, p.salary_p, p.room_p, p.type_p, DATE_FORMAT(p.start_p,'%d/%m/%Y') AS stp, DATE_FORMAT(p.finish_p,'%d/%m/%Y') AS fip, 
        p.status_id, s.status_name, p.approve_id FROM `petition` AS p NATURAL JOIN `user` AS u NATURAL JOIN `name_title` AS nt NATURAL JOIN `status` AS s 
        WHERE p.comName_p IS NOT NULL AND p.type_p = 'c'
        ORDER BY p.academicY_p";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
            
            $petition_id = $my_row['petition_id'];
            $date_p = $my_row['dt'];
            $user_id = $my_row['user_id'];
            $academicY_p = $my_row['academicY_p'];
            $FB_p = $my_row['FB_p'];
            $phone_p = $my_row['phone_p'];
            $position_p = $my_row['position_p'];
            $approverName_p = $my_row['approverName_p'];
            $approverSname_p = $my_row['approverSname_p'];
            $approverP_p = $my_row['approverP_p'];
            $comName_p = $my_row['comName_p']; 
            $compNo_p = $my_row['compNo_p']; 
            $compRoad_p = $my_row['compRoad_p']; 
            $compSubdist_p = $my_row['compSubdist_p']; 
            $compDistrict_p = $my_row['compDistrict_p'];
            $compProvince_p = $my_row['compProvince_p']; 
            $compPost_p = $my_row['compPost_p']; 
            $hrName_p = $my_row['hrName_p']; 
            $hrSname_p = $my_row['hrSname_p']; 
            $hrPhone_p = $my_row['hrPhone_p']; 
            $hrMail_p = $my_row['hrMail_p']; 
            $salary_p = $my_row['salary_p']; 
            $room_p = $my_row['room_p'];
            $type_p = $my_row['type_p']; 
            $start_p = $my_row['stp'];
            $finish_p = $my_row['fip'];    
            $status_id = $my_row['status_id'];

            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $status_name = $my_row['status_name'];
            

            $approve_id =$my_row['approve_id'];
           
            
            
        require("connection_close.php");

        return new petitionnewCModel($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
        $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
        $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name, 
        $academicY_p, $approve_id);
    }

    public static function getAllnew()
    {
        $petionCnewList = [];
        require("connection_connect.php");
        $sql = "SELECT p.petition_id, DATE_FORMAT(p.date_p,'%d/%m/%Y') AS dt, p.academicY_p, p.user_id, nt.name_title, u.user_name, 
        u.user_surname, p.FB_p, p.phone_p, p.position_p, p.approverName_p, p.approverSname_p, p.approverP_p, p.comName_p, 
        p.compNo_p, p.compRoad_p, p.compSubdist_p, p.compDistrict_p, p.compProvince_p, p.compPost_p, p.hrName_p, p.hrSname_p, 
        p.hrPhone_p, p.hrMail_p, p.salary_p, p.room_p, p.type_p, DATE_FORMAT(p.start_p,'%d/%m/%Y') AS stp, DATE_FORMAT(p.finish_p,'%d/%m/%Y') AS fip, 
        p.status_id, s.status_name, p.approve_id FROM `petition` AS p NATURAL JOIN `user` AS u NATURAL JOIN `name_title` AS nt NATURAL JOIN `status` AS s 
        WHERE p.comName_p IS NOT NULL AND p.type_p = 'c'
        ORDER BY p.academicY_p";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $petition_id = $my_row['petition_id'];
            $date_p = $my_row['dt'];
            $user_id = $my_row['user_id'];
            $academicY_p = $my_row['academicY_p'];
            $FB_p = $my_row['FB_p'];
            $phone_p = $my_row['phone_p'];
            $position_p = $my_row['position_p'];
            $approverName_p = $my_row['approverName_p'];
            $approverSname_p = $my_row['approverSname_p'];
            $approverP_p = $my_row['approverP_p'];
            $comName_p = $my_row['comName_p']; 
            $compNo_p = $my_row['compNo_p']; 
            $compRoad_p = $my_row['compRoad_p']; 
            $compSubdist_p = $my_row['compSubdist_p']; 
            $compDistrict_p = $my_row['compDistrict_p'];
            $compProvince_p = $my_row['compProvince_p']; 
            $compPost_p = $my_row['compPost_p']; 
            $hrName_p = $my_row['hrName_p']; 
            $hrSname_p = $my_row['hrSname_p']; 
            $hrPhone_p = $my_row['hrPhone_p']; 
            $hrMail_p = $my_row['hrMail_p']; 
            $salary_p = $my_row['salary_p']; 
            $room_p = $my_row['room_p'];
            $type_p = $my_row['type_p']; 
            $start_p = $my_row['stp'];
            $finish_p = $my_row['fip'];    
            $status_id = $my_row['status_id'];

            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $status_name = $my_row['status_name'];
            

            $approve_id =$my_row['approve_id'];
            

            $petionCnewList[] = new petitionnewCModel($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
            $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
            $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name, 
            $academicY_p, $approve_id);

        }
        require("connection_close.php");
        return $petionCnewList;

    }

   

  public static function update($petition_id)
  {
      require("connection_connect.php");
      $sql = "UPDATE `petition` SET `status_id`='02'WHERE petition_id = '$petition_id'";
      $result = $conn->query($sql);
      require("connection_close.php");
      return "update success $result row";
  }

  public static function updateNo($petition_id)
  {
      require("connection_connect.php");
      $sql = "UPDATE `petition` SET `status_id`='03'WHERE petition_id = '$petition_id'";
      $result = $conn->query($sql);
      require("connection_close.php");
      return "update success $result row";
  }

  public static function updateappNo($petition_id, $numrand)
  {
      require("connection_connect.php");
      $sql = "UPDATE `petition` SET `approve_id`='$numrand'WHERE petition_id = '$petition_id'";
      $result = $conn->query($sql);
      require("connection_close.php");
      return "update success $result row";
  }

  

  public static function search($key)
    {
        $petionCnewList = [];
        require("connection_connect.php");
        $sql = "SELECT p.petition_id, DATE_FORMAT(p.date_p,'%d/%m/%Y') AS dt, p.academicY_p, p.user_id, nt.name_title, u.user_name, 
        u.user_surname, p.FB_p, p.phone_p, p.position_p, p.approverName_p, p.approverSname_p, p.approverP_p, p.comName_p, 
        p.compNo_p, p.compRoad_p, p.compSubdist_p, p.compDistrict_p, p.compProvince_p, p.compPost_p, p.hrName_p, p.hrSname_p, 
        p.hrPhone_p, p.hrMail_p, p.salary_p, p.room_p, p.type_p, DATE_FORMAT(p.start_p,'%d/%m/%Y') AS stp, DATE_FORMAT(p.finish_p,'%d/%m/%Y') AS fip, 
        p.status_id, s.status_name, p.approve_id FROM `petition` AS p NATURAL JOIN `user` AS u NATURAL JOIN `name_title` AS nt NATURAL JOIN `status` AS s 
                     
        WHERE (p.petition_id like '%$key%' or p.date_p like '%$key%' or p.academicY_p like '%$key%' or p.user_id like '%$key%'
                    or nt.name_title like '%$key%' or u.user_name like '%$key%' or u.user_surname like '%$key%' or p.FB_p like '%$key%'
                    or p.phone_p like '%$key%' or p.position_p like '%$key%' or p.approverName_p like '%$key%' or p.approverSname_p like '%$key%'
                    or p.approverP_p like '%$key%' or p.comName_p like '%$key%' or p.compNo_p like '%$key%' or p.compRoad_p like '%$key%' 
                    or p.compSubdist_p like '%$key%' or p.compDistrict_p like '%$key%' or p.compProvince_p like '%$key%' or p.compPost_p like '%$key%'
                    or p.hrName_p like '%$key%' or p.hrSname_p like '%$key%' or p.hrPhone_p like '%$key%' or p.hrMail_p like '%$key%'
                    or p.salary_p like '%$key%' or p.room_p like '%$key%' or p.type_p like '%$key%' or p.start_p like '%$key%' or p.finish_p like '%$key%'
                    or s.status_id like '%$key%' or s.status_name like '%$key%' or p.approve_id like '%$key%') AND p.comName_p IS NOT NULL AND p.type_p ='c'
                    ORDER BY p.academicY_p";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $petition_id = $my_row['petition_id'];
            $date_p = $my_row['dt'];
            $user_id = $my_row['user_id'];
            $academicY_p = $my_row['academicY_p'];
            $FB_p = $my_row['FB_p'];
            $phone_p = $my_row['phone_p'];
            $position_p = $my_row['position_p'];
            $approverName_p = $my_row['approverName_p'];
            $approverSname_p = $my_row['approverSname_p'];
            $approverP_p = $my_row['approverP_p'];
            $comName_p = $my_row['comName_p']; 
            $compNo_p = $my_row['compNo_p']; 
            $compRoad_p = $my_row['compRoad_p']; 
            $compSubdist_p = $my_row['compSubdist_p']; 
            $compDistrict_p = $my_row['compDistrict_p'];
            $compProvince_p = $my_row['compProvince_p']; 
            $compPost_p = $my_row['compPost_p']; 
            $hrName_p = $my_row['hrName_p']; 
            $hrSname_p = $my_row['hrSname_p']; 
            $hrPhone_p = $my_row['hrPhone_p']; 
            $hrMail_p = $my_row['hrMail_p']; 
            $salary_p = $my_row['salary_p']; 
            $room_p = $my_row['room_p'];
            $type_p = $my_row['type_p']; 
            $start_p = $my_row['stp'];
            $finish_p = $my_row['fip'];    
            $status_id = $my_row['status_id'];

            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $status_name = $my_row['status_name'];
            

            $approve_id = $my_row['approve_id'];
            

            $petionCnewList[] = new petitionnewCModel($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
            $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
            $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name, 
            $academicY_p, $approve_id);
        }
        require("connection_close.php");
        return $petionCnewList;
    }

    public static function searchY($key)
    {
        $petionCnewList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `petition` NATURAL JOIN `user`NATURAL JOIN `name_title` NATURAL JOIN `status` 
                WHERE (academicY_p like '%$key%' ) AND comName_p IS NOT NULL AND type_p ='c'
                ORDER BY petition_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $petition_id = $my_row['petition_id'];
            $date_p = $my_row['date_p'];
            $user_id = $my_row['user_id'];
            $academicY_p = $my_row['academicY_p'];
            $FB_p = $my_row['FB_p'];
            $phone_p = $my_row['phone_p'];
            $position_p = $my_row['position_p'];
            $approverName_p = $my_row['approverName_p'];
            $approverSname_p = $my_row['approverSname_p'];
            $approverP_p = $my_row['approverP_p'];
            $dc_id = $my_row['dc_id'];
            $c_id = $my_row['c_id'];
            $comName_p = $my_row['comName_p']; 
            $compNo_p = $my_row['compNo_p']; 
            $compRoad_p = $my_row['compRoad_p']; 
            $compSubdist_p = $my_row['compSubdist_p']; 
            $compDistrict_p = $my_row['compDistrict_p'];
            $compProvince_p = $my_row['compProvince_p']; 
            $compPost_p = $my_row['compPost_p']; 
            $hrName_p = $my_row['hrName_p']; 
            $hrSname_p = $my_row['hrSname_p']; 
            $hrPhone_p = $my_row['hrPhone_p']; 
            $hrMail_p = $my_row['hrMail_p']; 
            $salary_p = $my_row['salary_p']; 
            $room_p = $my_row['room_p'];
            $type_p = $my_row['type_p']; 
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];    
            $status_id = $my_row['status_id'];

            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $status_name = $my_row['status_name'];
            

            $approve_id = $my_row['approve_id'];
            

            $petionCnewList[] = new petitionnewCModel($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
            $dc_id, $c_id, $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
            $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name, 
            $academicY_p, $approve_id);
        }
        require("connection_close.php");
        return $petionCnewList;
    }

    public static function searchD($key)
    {
        $petionCnewList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `petition` NATURAL JOIN `user`NATURAL JOIN `name_title` NATURAL JOIN `status`            
                WHERE (date_p like '%$key%' ) AND comName_p IS NOT NULL AND type_p ='c'
                ORDER BY petition_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $petition_id = $my_row['petition_id'];
            $date_p = $my_row['date_p'];
            $user_id = $my_row['user_id'];
            $academicY_p = $my_row['academicY_p'];
            $FB_p = $my_row['FB_p'];
            $phone_p = $my_row['phone_p'];
            $position_p = $my_row['position_p'];
            $approverName_p = $my_row['approverName_p'];
            $approverSname_p = $my_row['approverSname_p'];
            $approverP_p = $my_row['approverP_p'];
            $dc_id = $my_row['dc_id'];
            $c_id = $my_row['c_id'];
            $comName_p = $my_row['comName_p']; 
            $compNo_p = $my_row['compNo_p']; 
            $compRoad_p = $my_row['compRoad_p']; 
            $compSubdist_p = $my_row['compSubdist_p']; 
            $compDistrict_p = $my_row['compDistrict_p'];
            $compProvince_p = $my_row['compProvince_p']; 
            $compPost_p = $my_row['compPost_p']; 
            $hrName_p = $my_row['hrName_p']; 
            $hrSname_p = $my_row['hrSname_p']; 
            $hrPhone_p = $my_row['hrPhone_p']; 
            $hrMail_p = $my_row['hrMail_p']; 
            $salary_p = $my_row['salary_p']; 
            $room_p = $my_row['room_p'];
            $type_p = $my_row['type_p']; 
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];    
            $status_id = $my_row['status_id'];

            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $status_name = $my_row['status_name'];
            

            $approve_id = $my_row['approve_id'];
            

            $petionCnewList[] = new petitionnewCModel($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
            $dc_id, $c_id, $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
            $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name, 
            $academicY_p, $approve_id);
        }
        require("connection_close.php");
        return $petionCnewList;
    }


    public static function addC_old($date,$userid,$faceB,$phone,$position,$approve_name,$approve_lastname,$approve_position,$company_id,$company_no,$company_road,$company_sub,$company_dis,$company_prov,$company_code,$hr_name,$hr_lastname,$hr_phone,$hr_mail,$pay,$room,$start,$finish){
        require("connection_connect.php");
        $sql = "INSERT INTO `petition`( `date_p`, `user_id`, `FB_p`, `phone_p`,`position_p`, 
                                        `approverName_p`, `approverSname_p`, `approverP_p`, 
                                        `dc_id`, `compNo_p`, `compRoad_p`, `compSubdist_p`, `compDistrict_p`, `compProvince_p`, `compPost_p`, 
                                        `hrName_p`, `hrSname_p`, `hrPhone_p`, `hrMail_p`, 
                                        `salary_p`, `room_p`, `type_p`, `start_p`, `finish_p`, `status_id`) 
                                VALUES ('$date','$userid','$faceB','$phone','$position',
                                        '$approve_name','$approve_lastname',',$approve_position',
                                        '$company_id','$company_no','$company_road','$company_sub','$company_dis','$company_prov','$company_code',
                                        '$hr_name','$hr_lastname','$hr_phone','$hr_mail',
                                        '$pay','$room','c','$start','$finish','01')";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    

    public static function addC_new($date,$userid,$faceB,$phone,$position,$approve_name,$approve_lastname,$approve_position,$company_name,$company_no,$company_road,$company_sub,$company_dis,$company_prov,$company_code,$hr_name,$hr_lastname,$hr_phone,$hr_mail,$pay,$room,$start,$finish){
        require("connection_connect.php");
        $sql = "INSERT INTO `petition`( `date_p`, `user_id`, `FB_p`, `phone_p`, `position_p`,
                                        `approverName_p`, `approverSname_p`, `approverP_p`, 
                                        `comName_p`, `compNo_p`, `compRoad_p`, `compSubdist_p`, `compDistrict_p`, `compProvince_p`, `compPost_p`, 
                                        `hrName_p`, `hrSname_p`, `hrPhone_p`, `hrMail_p`, 
                                        `salary_p`, `room_p`, `type_p`, `start_p`, `finish_p`, `status_id`) 
                                VALUES ('$date','$userid','$faceB','$phone','$position',
                                        '$approve_name','$approve_lastname','$approve_position',
                                        '$company_name','$company_no','$company_road','$company_sub','$company_dis','$company_prov','$company_code',
                                        '$hr_name','$hr_lastname','$hr_phone','$hr_mail',
                                        '$pay','$room','c','$start','$finish','01')";
        $result = $conn->query($sql);
        require("connection_close.php");
    }




}?>