<?php
class approveModel
{
    public $approve_id;
    public $approve_date;
    public $status_id;
    public $status_name;

    public function __construct($approve_id,$approve_date,$status_id,$status_name)
    {
        
        $this->approve_id = $approve_id;
        $this->approve_name = $approve_date;
        $this->status_id = $status_id;
        $this->status_name = $status_name;

    }

    public static function getAll()
    {
        $approveList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM approve as a NATURAL JOIN status as s WHERE a.status_id=s.status_id;";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $approve_id = $my_row['approve_id'];
            $approve_name = $my_row['approve_name'];
            $status_id = $my_row['status_id'];
            $status_name = $my_row['status_name'];
            $approveList[] = new approveModel($approve_id,$approve_date,$status_id,$status_name);

        }
        require("connection_close.php");
        return $approveList;

    }

    public static function get($approve_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM approve as a NATURAL JOIN status as s WHERE a.status_id=s.status_id;";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc()
        $approve_id = $my_row['approve_id'];
        $approve_name = $my_row['approve_name'];
        $status_id = $my_row['status_id'];
        $status_name = $my_row['status_name'];
        require("connection_close.php");

        return new approveModel($approve_id,$approve_date,$status_id,$status_name);
    }


}
?>