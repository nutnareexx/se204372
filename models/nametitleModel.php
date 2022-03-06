<?php
class nametitleModel{
    public $name_id;
    public $name_title;

    public function __construct($name_id,$name_title)
    {

        $this->name_id = $name_id;
        $this->name_title = $name_title;

    }

    public static function getAll()
    {
        $nametitleList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `name_title`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $name_id = $my_row['name_id'];
            $name_title = $my_row['name_title'];
            $nametitleList[] = new nametitleModel($name_id,$name_title);
        }
        require("connection_close.php");
        return $nametitleList;

    }

    public static function get($name_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `name_title`";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc()
        $name_id = $my_row['name_id'];
        $name_title = $my_row['name_title'];
        require("connection_connect.php");

        return new nametitleModel($name_id,$name_title);

    }


}
?>