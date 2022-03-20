<?php
class approveModel
{
    public $approve_id;
    public $approve_date;
    public $approve_reason;

    public function __construct($approve_id,$approve_date,$approve_reason)
    {
        
        $this->approve_id = $approve_id;
        $this->approve_date = $approve_date;
        $this->approve_reason = $approve_reason;
    }

    public static function getAll()
    {
        $approveList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `approve`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $approve_id = $my_row['approve_id'];
            $approve_date = $my_row['approve_date'];
            $approve_reason = $my_row['approve_reason'];
            $approveList[] = new approveModel($approve_id,$approve_date,$approve_reason);

        }
        require("connection_close.php");
        return $approveList;

    }

    public static function get($approve_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `approve`  WHERE approve_id = '$approve_id';";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $approve_id = $my_row['approve_id'];
        $approve_date = $my_row['approve_date'];
        $approve_reason = $my_row['approve_reason'];
        
        require("connection_close.php");

        return new approveModel($approve_id,$approve_date,$approve_reason);
    }

    public static function Add($approve_id, $approve_reason)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `approve`(`approve_id`,  `approve_reason`) VALUES ('$approve_id','$approve_reason')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return;
    }
}
?>