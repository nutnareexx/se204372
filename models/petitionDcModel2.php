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

    public function __construct($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
    $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
    $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name)
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
        require("connection_close.php");

        return new petitionModelFornew($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
        $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
        $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name);
    }

    
    public static function getAll()
    {
        $petionDcList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `petition` NATURAL JOIN `user` NATURAL JOIN `name_title` NATURAL JOIN `status` WHERE comName_p IS NOT null  AND type_p = 'dc'";
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
            $petionDcList[] = new petitionModelFornew($petition_id, $date_p,$user_id, $FB_p, $phone_p, $position_p, $approverName_p, $approverSname_p, $approverP_p,
            $comName_p, $compNo_p, $compRoad_p, $compSubdist_p, $compDistrict_p, $compProvince_p, $compPost_p, $hrName_p, $hrSname_p,
            $hrPhone_p, $hrMail_p, $salary_p, $room_p, $type_p, $start_p, $finish_p, $status_id, $name_title, $user_name, $user_surname, $status_name);

        }
        require("connection_close.php");
        return $petionDcList;

    }

    }
?>