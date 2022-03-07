<?php
class userModel{
    public $user_id;
    public $name_id;
    public $user_name;
    public $user_surname;
    public $user_phone;
    public $user_email;

    public function __construct($user_id, $name_id, $user_name, $user_surname, $user_phone, $user_email)
    {

        $this->user_id = $user_id;
        $this->name_id = $name_id;
        $this->user_name = $user_name;
        $this->user_surname = $user_surname;
        $this->user_phone = $user_phone;
        $this->user_email = $user_email;

    }

    public static function getAll()
    {
        $userList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `user`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $user_id = $my_row['user_id'];
            $name_id = $my_row['name_id'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $user_phone = $my_row['user_phone'];
            $user_email = $my_row['user_email'];
            $userList[] = new userModel($user_id, $name_id, $user_name, $user_surname, $user_phone, $user_email);
        }
        require("connection_close.php");
        return $userList;

    }

    public static function get($user_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `user`";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
            $user_id = $my_row['user_id'];
            $name_id = $my_row['name_id'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $user_phone = $my_row['user_phone'];
            $user_email = $my_row['user_email'];
        require("connection_connect.php");

        return new userModel($user_id, $name_id, $user_name, $user_surname, $user_phone, $user_email);

    }


}
?>