<?php
class petitionDcModel{
    public $approve_id;
    public $p_id;
    public $approve_date;
    public $status_id;
    public $user_id;
    public $company_id;
    public $file_id;
    public $date_p;

    public function __construct($approve_id, $p_id, $approve_date, $status_id, $user_id, $company_id, $file_id, $date_p)
    {
        $this->approve_id = $approve_id;
        $this->p_id = $p_id;
        $this->approve_date = $approve_date;
        $this->status_id = $status_id;
        $this->user_id = $user_id;
        $this->company_id = $company_id;
        $this->file_id = $file_id;
        $this->date_p = $date_p;
        
    }

    public static function getAll()
    {
        $DetailCompanyList = [];
        require("connection_connect.php");
        $sql = "SELECT t.petition_id, t.user_id, t.name_title, t.user_name, t.user_surname, t.start_p, t.finish_p, t.dc_position, t.dc_name, t.dc_pay, t.dc_room, status.status_name
        FROM `status` INNER JOIN 
            (SELECT userp.petition_id, userp.user_id, userp.name_id, name_title.name_title, userp.user_name, userp.user_surname, userp.start_p, userp.finish_p, userp.dc_position, userp.dc_name, 
             userp.dc_pay, 	userp.dc_room, userp.status_id 
                FROM `name_title` INNER JOIN 
                (SELECT pdc.petition_id, pdc.user_id, pdc.start_p, pdc.finish_p, pdc.dc_position, pdc.dc_name, pdc.dc_pay, pdc.dc_room, user.name_id, user.user_name, user.user_surname, pdc.status_id 
                     FROM `user`  INNER JOIN
                    (SELECT petition_id, start_p, finish_p, date_p, user_id, status_id, petition.dc_id, dc_name, dc_position, dc_pay, dc_room 
                     FROM `petition` INNER JOIN `detail_company` ON petition.dc_id = detail_company.dc_id) AS pdc ON user.user_id = pdc.user_id) AS userp ON userp.name_id = name_title.name_id) AS t
                     ON t.status_id = status.status_id;";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $approve_id = $my_row['approve_id'];
            $p_id = $my_row['p_id'];
            $approve_date = $my_row['approve_date'];
            $status_id = $my_row['status_id'];
            $user_id = $my_row['user_id'];
            $company_id = $my_row['company_id'];
            $file_id = $my_row['file_id'];
            $date_p = $my_row['date_p'];
            $DetailCompanyList[] = new petitionModel($approve_id, $p_id, $approve_date, $status_id, $user_id, $company_id, $file_id, $date_p);

        }
        require("connection_close.php");
        return $DetailCompanyList;




    }
}






?>