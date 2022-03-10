

<?php
class DetailCompanyModel{
    public $dc_id;	
    public $dc_name;
    public $dc_position;	
    public $dc_department;	
    public $dc_num;	
    public $dc_skills;	
    public $dc_nature;	
    public $dc_pay;	
    public $dc_room;	
    public $dc_benefit;	
    public $dc_select;

    public function __construct($dc_id,$dc_name,$dc_position,$dc_department,$dc_num,$dc_skills,$dc_nature,$dc_pay,$dc_room,$dc_benefit,$dc_select)
    {
        $this->dc_id = $dc_id;
        $this->dc_name = $dc_name;
        $this->dc_position = $dc_position;
        $this->dc_department = $dc_department;
        $this->dc_num = $dc_num;
        $this->dc_skills = $dc_skills;
        $this->dc_nature = $dc_nature;
        $this->dc_pay = $dc_pay;
        $this->dc_room = $dc_room;
        $this->dc_benefit = $dc_benefit;
        $this->dc_select = $dc_select;
        
    }

    public static function getAll()
    {
        $DetailCompanyList =[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `detail_company`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $dc_id = $my_row['dc_id'];
            $dc_name = $my_row['dc_name'];
            $dc_position = $my_row['dc_position'];
            $dc_department = $my_row['dc_department'];
            $dc_num = $my_row['dc_num'];
            $dc_skills = $my_row['dc_skills'];
            $dc_nature = $my_row['dc_nature'];
            $dc_pay = $my_row['dc_pay'];
            $dc_room = $my_row['dc_room'];
            $dc_benefit = $my_row['dc_benefit'];
            $dc_select = $my_row['dc_select'];
            $DetailCompanyList[] = new DetailCompanyModel($dc_id,$dc_name,$dc_position,$dc_department,$dc_num,$dc_skills,$dc_nature,$dc_pay,$dc_room,$dc_benefit,$dc_select);

        }
        require("connection_close.php");
        return $DetailCompanyList;
    }

    public static function add($dc_name,$dc_position,$dc_department,$dc_num,$dc_skills,$dc_nature,$dc_pay,$dc_room,$dc_benefit,$dc_select)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `detail_company`( `dc_name`, `dc_position`, `dc_department`, `dc_num`, `dc_skills`, `dc_nature`, `dc_pay`, `dc_room`, `dc_benefit`, `dc_select`) 
        VALUES ('$dc_name','$dc_position','$dc_department','$dc_num','$dc_skills','$dc_nature','$dc_pay','$dc_room','$dc_benefit','$dc_select')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function search($key)
    {
        $DetailCompanyList =[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `detail_company`
        WHERE (dc_name like '%$key%' or dc_position like '%$key%' or dc_department like '%$key%' or dc_num like '%$key%' or dc_skills like '%$key%' or dc_nature like '%$key%' or dc_pay like '%$key%' or
        dc_room like '%$key%' or dc_benefit like '%$key%' or dc_select like '%$key%' )";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $dc_id = $my_row['dc_id'];
            $dc_name = $my_row['dc_name'];
            $dc_position = $my_row['dc_position'];
            $dc_department = $my_row['dc_department'];
            $dc_num = $my_row['dc_num'];
            $dc_skills = $my_row['dc_skills'];
            $dc_nature = $my_row['dc_nature'];
            $dc_pay = $my_row['dc_pay'];
            $dc_room = $my_row['dc_room'];
            $dc_benefit = $my_row['dc_benefit'];
            $dc_select = $my_row['dc_select'];
            $DetailCompanyList[] = new DetailCompanyModel($dc_id,$dc_name,$dc_position,$dc_department,$dc_num,$dc_skills,$dc_nature,$dc_pay,$dc_room,$dc_benefit,$dc_select);

        }
        require("connection_close.php");
        return $DetailCompanyList;
    }



}

?>