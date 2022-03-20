<?php
    class petitionModelFornew {
        public $petition_id;
        public $date_p;
        public $user_id;
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
    $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name,$approve_id)
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

    public static function get($petition_id)
    {
        
        require("connection_connect.php");
        $sql = "SELECT * FROM `petition` NATURAL JOIN `user` NATURAL JOIN `name_title` NATURAL JOIN `status`
         WHERE petition_id = '$petition_id' AND type_p = 'dc';";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $petition_id = $my_row['petition_id'];
        $date_p = $my_row['date_p'];
        $user_id = $my_row['user_id'];
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
        $start_p = $my_row['start_p'];
        $finish_p = $my_row['finish_p'];    
        $status_id = $my_row['status_id'];

        $name_title = $my_row['name_title'];
        $user_name = $my_row['user_name'];
        $user_surname = $my_row['user_surname'];
        $status_name = $my_row['status_name'];
        $approve_id = $my_row['approve_id'];
        require("connection_close.php");

        return new petitionModelFornew($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
        $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
        $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name,$approve_id);
    }

    
    public static function getAll()
    {
        $petionDcList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `petition` AS p NATURAL JOIN `user` AS u NATURAL JOIN `name_title` AS nt NATURAL JOIN `status` AS s
        WHERE p.comName_p IS NOT null  AND p.type_p = 'dc';";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $petition_id = $my_row['petition_id'];
            $date_p = $my_row['date_p'];
            $user_id = $my_row['user_id'];
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
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];    
            $status_id = $my_row['status_id'];

            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $status_name = $my_row['status_name'];
            $approve_id = $my_row['approve_id'];
            $petionDcList[] = new petitionModelFornew($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
            $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
            $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name,$approve_id);

        }
        require("connection_close.php");
        return $petionDcList;

    }

    public static function search($key)
    {
        $petitionFornew = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `petition` NATURAL JOIN `user`NATURAL JOIN `name_title` NATURAL JOIN `status` 
                     
        WHERE (petition_id like '%$key%' or date_p like '%$key%' 
        or user_id like '%$key%' or academicY_p like '%$key%' or FB_p like '%$key%' or phone_p like '%$key%' or position_p like '%$key%'
        or approverName_p like '%$key%' or approverSname_p like '%$key%' or approverP_p like '%$key%' or dc_id like '%$key%'
        or c_id like '%$key%'or comName_p like '%$key%' or compNo_p like '%$key%' or compRoad_p like '%$key%' 
        or compSubdist_p like '%$key%' or compDistrict_p like '%$key%' or compProvince_p like '%$key%' or compPost_p like '%$key%'
        or hrName_p like '%$key%' or hrSname_p like '%$key%' or hrPhone_p like '%$key%' or hrMail_p like '%$key%'
        or salary_p like '%$key%' or room_p like '%$key%' or type_p like '%$key%' or start_p like '%$key%' or finish_p like '%$key%'
        or status_id like '%$key%' or name_title like '%$key%' or user_name like '%$key%' or user_surname like '%$key%'
        or status_name like '%$key%' or approve_id like '%$key%') AND comName_p IS NOT NULL AND type_p ='dc'
        ORDER BY petition_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $petition_id = $my_row['petition_id'];
            $date_p = $my_row['date_p'];
            $user_id = $my_row['user_id'];
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
            
            $petitionFornew[] = new petitionModelFornew($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
            $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
            $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name,$approve_id);
        }
        require("connection_close.php");
        return $petitionFornew;
    }

    public static function update($petition_id)
    {
        require("connection_connect.php");
        $sql = "UPDATE `petition` SET `status_id`='02' WHERE petition_id = '$petition_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
  }

    }
?>