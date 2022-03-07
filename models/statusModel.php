<?php
class statusModel{
    public $status_id;
    public $status_name;

    public function __construct($status_id,$status_name)
    {

        $this->status_id = $status_id;
        $this->status_name = $status_name;

    }

    public static function getAll()
    {
        $statusList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `status` ";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $status_id = $my_row['status_id'];
            $status_name = $my_row['status_name'];
            $statusList[] = new statusModel($status_id,$status_name);
        }
        require("connection_close.php");
        return $statusList;

    }

    public static function get($status_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `status` ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $status_id = $my_row['status_id'];
        $status_name = $my_row['status_name'];
        require("connection_connect.php");

        return new statusModel($status_id,$status_name);

    }


}
?>