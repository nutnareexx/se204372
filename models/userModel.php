<?php
class userModel{
    public $user_id;
    public $name_id;
    public $user_name;
    public $user_surname;
    public $user_phone;
    public $user_email;
    public $user_password;
    public $user_title;

    public function __construct($user_id, $name_id, $user_name, $user_surname, $user_phone, $user_email,$pass,$title)
    {

        $this->user_id = $user_id;
        $this->name_id = $name_id;
        $this->user_name = $user_name;
        $this->user_surname = $user_surname;
        $this->user_phone = $user_phone;
        $this->user_email = $user_email;
        $this->user_password = $pass;
        $this->user_title = $title;

    }

    public static function getAll()
    {
        $userList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `user` NATURAL JOIN name_title";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $user_id = $my_row['user_id'];
            $name_id = $my_row['name_id'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $user_phone = $my_row['user_phone'];
            $user_email = $my_row['user_email'];
            $user_password = $my_row['user_password'];
            $user_title = $my_row['name_title'];
            $userList[] = new userModel($user_id, $name_id, $user_name, $user_surname, $user_phone, $user_email,$user_password,$user_title);
        }
        require("connection_close.php");
        return $userList;

    }

    public static function get($user_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `user` NATURAL JOIN name_title WHERE user_id = '$user_id' ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
            $user_id = $my_row['user_id'];
            $name_id = $my_row['name_id'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $user_phone = $my_row['user_phone'];
            $user_email = $my_row['user_email'];
            $user_password = $my_row['user_password'];
            $user_title = $my_row['name_title'];
        require("connection_connect.php");

        return new userModel($user_id, $name_id, $user_name, $user_surname, $user_phone, $user_email,$user_password,$user_title);

    }


}
?>