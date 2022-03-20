

<?php
class cooperativeModel{
    public $c_id;	
    public $c_name;
    public $c_position;	
    public $c_department;	
    public $c_num;	
    public $c_skills;	
    public $c_nature;	
    public $c_pay;	
    public $c_room;	
    public $c_benefit;	
    public $c_select;

    public function __construct($c_id,$c_name,$c_position,$c_department,$c_num,$c_skills,$c_nature,$c_pay,$c_room,$c_benefit,$c_select)
    {
        $this->c_id = $c_id;
        $this->c_name = $c_name;
        $this->c_position = $c_position;
        $this->c_department = $c_department;
        $this->c_num = $c_num;
        $this->c_skills = $c_skills;
        $this->c_nature = $c_nature;
        $this->c_pay = $c_pay;
        $this->c_room = $c_room;
        $this->c_benefit = $c_benefit;
        $this->c_select = $c_select;
        
    }

    public static function get($c_id)
    {
        
        require("connection_connect.php");
        $sql = "SELECT * FROM `detail_cooperative`
                     WHERE c_id = '$c_id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $c_id = $my_row['c_id'];
        $c_name = $my_row['c_name'];
        $c_position = $my_row['c_position'];
        $c_department = $my_row['c_department'];
        $c_num = $my_row['c_num'];
        $c_skills = $my_row['c_skills'];
        $c_nature = $my_row['c_nature'];
        $c_pay = $my_row['c_pay'];
        $c_room = $my_row['c_room'];
        $c_benefit = $my_row['c_benefit'];
        $c_select = $my_row['c_select'];
        require("connection_close.php");

        return new cooperativeModel($c_id,$c_name,$c_position,$c_department,$c_num,$c_skills,$c_nature,$c_pay,$c_room,$c_benefit,$c_select);
    }



    public static function getAll()
    {
        $cooperativeList =[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `detail_cooperative` ";
        $result = $conn->query($sql);
        $x=1;
        while($my_row = $result->fetch_assoc())
        {
            $c_id = $my_row=['c_id'];
            $c_name = $my_row['c_name'];
            $c_position = $my_row['c_position'];
            $c_department = $my_row['c_department'];
            $c_num = $my_row['c_num'];
            $c_skills = $my_row['c_skills'];
            $c_nature = $my_row['c_nature'];
            $c_pay = $my_row['c_pay'];
            $c_room = $my_row['c_room'];
            $c_benefit = $my_row['c_benefit'];
            $c_select = $my_row['c_select'];
            $cooperativeList[] = new cooperativeModel($c_id,$c_name,$c_position,$c_department,$c_num,$c_skills,$c_nature,$c_pay,$c_room,$c_benefit,$c_select);

        }
        require("connection_close.php");
        return $cooperativeList;
    }

    public static function add($c_name,$c_position,$c_department,$c_num,$c_skills,$c_nature,$c_pay,$c_room,$c_benefit,$c_select)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `detail_cooperative`( `c_name`, `c_position`, `c_department`, `c_num`, `c_skills`, `c_nature`, `c_pay`, `c_room`, `c_benefit`, `c_select`) 
        VALUES ('$c_name','$c_position','$c_department','$c_num','$c_skills','$c_nature','$c_pay','$c_room','$c_benefit','$c_select')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function search($key)
    {
        $cooperativeList =[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `detail_cooperative`
        WHERE (c_name like '%$key%' or c_position like '%$key%' or c_department like '%$key%' or c_num like '%$key%' or c_skills like '%$key%' or c_nature like '%$key%' or c_pay like '%$key%' or
        c_room like '%$key%' or c_benefit like '%$key%' or c_select like '%$key%' )";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $c_id = $my_row['c_id'];
            $c_name = $my_row['c_name'];
            $c_position = $my_row['c_position'];
            $c_department = $my_row['c_department'];
            $c_num = $my_row['c_num'];
            $c_skills = $my_row['c_skills'];
            $c_nature = $my_row['c_nature'];
            $c_pay = $my_row['c_pay'];
            $c_room = $my_row['c_room'];
            $c_benefit = $my_row['c_benefit'];
            $c_select = $my_row['c_select'];
            $cooperativeList[] = new cooperativeModel($c_id,$c_name,$c_position,$c_department,$c_num,$c_skills,$c_nature,$c_pay,$c_room,$c_benefit,$c_select);

        }
        require("connection_close.php");
        return $cooperativeList;
    }

    public static function update($c_id, $c_name,$c_position,$c_department,$c_num,$c_skills,$c_nature,$c_pay,$c_room,$c_benefit,$c_select)
    {
        
    
        require("connection_connect.php");
        $sql = "UPDATE `detail_cooperative`
        SET c_name = '$c_name' , c_position = '$c_position', c_department = '$c_department' , c_num = '$c_num' , c_skills= '$c_skills', c_nature = '$c_nature', c_pay = '$c_pay',
        c_room = '$c_room', c_benefit = '$c_benefit', c_select = '$c_select'
        WHERE c_id = '$c_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($c_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM `detail_cooperative` WHERE c_id = '$c_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }



}

?>