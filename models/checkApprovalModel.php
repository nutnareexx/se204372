<?php
class checkApprovalModel{
    public $user_id;
    public $dc_name;
    public $status_name;
    public $position_p;
    
    public $name_title;
    public $user_name;
    public $user_sername;

    public $start_p;
    public $finish_p;

    public function __construct($user_id, $dc_name, $status_name, $position_p, $name_title, 
    $user_name, $user_sername, $start_p, $finish_p)
    {
        $this->user_id = $user_id;
        $this->dc_user = $dc_name;
        $this->status_name = $status_name;
        $this->position_p = $position_p;
        $this->name_title = $name_title;
        $this->user_name = $user_name;
        $this->user_sername = $user_sername;
        $this->start_p = $start_p;
        $this->finish_p = $finish_p;

    }

    public static function getdc($user_id)
    {
        $petionDcList = [];
        require("connection_connect.php");
        $sql = "SELECT user.user_id,name_title.name_title,user.user_name,user.user_surname, petition.position_p
        , detail_company.dc_name,status.status_name ,petition.start_p,petition.finish_p 
        FROM `petition` NATURAL JOIN `user` NATURAL JOIN `name_title` NATURAL JOIN `status` 
        NATURAL JOIN `detail_company` WHERE user_id = 'user_id';";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
        $user_id = $my_row['user_id'];
        $name_title = $my_row['name_title'];
        $user_name = $my_row['user_name'];
        $user_surname = $my_row['user_surname'];
        $position_p = $my_row['position_p'];
        $dc_name = $my_row['dc_name'];
        $status_name = $my_row['status_name'];
        
        $start_p = $my_row['start_p'];
        $finish_p = $my_row['finish_p'];    
        
        return new petitionDcModel($user_id, $dc_name, $status_name, $position_p, $name_title, 
        $user_name, $user_sername, $start_p, $finish_p);
        }
        
        require("connection_close.php");
        return $petionDcList;
        
    }


    

}