<?php
class checkApprovalModel{
    public $user_id;
    public $dc_name;
    
    public $status_name;
    public $position_p;
    
    public $name_title;
    public $user_name;
    public $user_surname;

    public $start_p;
    public $finish_p;

    public function __construct($user_id, $dc_name, $status_name, $position_p, $name_title, 
    $user_name, $user_surname, $start_p, $finish_p)
    {
        $this->user_id = $user_id;
        $this->dc_name = $dc_name;

        $this->status_name = $status_name;
        $this->position_p = $position_p;
        $this->name_title = $name_title;
        $this->user_name = $user_name;
        $this->user_surname = $user_surname;
        $this->start_p = $start_p;
        $this->finish_p = $finish_p;

    }

    public static function getdc($user_id)
    {
        $checkList = [];
        require("connection_connect.php");
        $sql = "SELECT u.user_id,n.name_title,u.user_name,u.user_surname, p.position_p, d.dc_name,s.status_name ,p.start_p,p.finish_p 
        FROM `petition`AS p NATURAL JOIN `user` AS u NATURAL JOIN `name_title`AS n NATURAL JOIN `status` AS s 
        NATURAL JOIN `detail_company` AS d WHERE u.user_id ='$user_id';";
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
        
        $checkList[] = new checkApprovalModel($user_id, $dc_name, $status_name, $position_p, $name_title, 
        $user_name, $user_surname, $start_p, $finish_p);
        }
        
        require("connection_close.php");
        return $checkList;
        
    }

    public static function getc($user_id)
    {
        $checkCList = [];
        require("connection_connect.php");
        $sql = "SELECT u.user_id,n.name_title,u.user_name,u.user_surname, p.position_p, d.c_name,s.status_name ,
        p.start_p,p.finish_p FROM `petition`AS p NATURAL JOIN `user` AS u NATURAL JOIN `name_title`AS n 
        NATURAL JOIN `status` AS s NATURAL JOIN `detail_cooperative` AS d WHERE u.user_id ='$user_id';";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
        $user_id = $my_row['user_id'];
        $name_title = $my_row['name_title'];
        $user_name = $my_row['user_name'];
        $user_surname = $my_row['user_surname'];
        $position_p = $my_row['position_p'];
        $c_name = $my_row['c_name'];
        $status_name = $my_row['status_name'];
        
        $start_p = $my_row['start_p'];
        $finish_p = $my_row['finish_p'];    
        
        $checkCList[] = new checkApprovalModel($user_id, $c_name, $status_name, $position_p, $name_title, 
        $user_name, $user_surname, $start_p, $finish_p);
        }
        
        require("connection_close.php");
        return $checkCList;
        
    }


    

}?>