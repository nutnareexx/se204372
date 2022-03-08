<?php
class petitionDcModel{
    public $dc_id;
    public $petition_id;
    public $user_id;
    public $name_title;
    public $user_name;
    public $user_surname;
    public $start_p;
    public $finish_p;
    public $dc_position;
    public $dc_name;
    public $dc_pay;
    public $dc_room;
    public $status_id;
    public $status_name;
    public $c_id;

    public function __construct($dc_id, $petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p, 
    $dc_position,$dc_name, $dc_pay, $dc_room, $status_id, $status_name, $c_id)
    {
        $this->dc_id = $dc_id;
        $this->petition_id = $petition_id;
        $this->user_id = $user_id;
        $this->name_title = $name_title;
        $this->user_name = $user_name;
        $this->user_surname = $user_surname;
        $this->start_p = $start_p;
        $this->finish_p = $finish_p;
        $this->dc_position = $dc_position;
        $this->dc_name = $dc_name;
        $this->dc_pay = $dc_pay;
        $this->dc_room = $dc_room;
        $this->status_id = $status_id;
        $this->status_name = $status_name;
        $this->c_id = $c_id;
        
    }

    public static function get($petition_id)
    {
        
        require("connection_connect.php");
        $sql = "SELECT t.dc_id, t.petition_id, t.user_id, t.name_title, t.user_name, t.user_surname, t.start_p, t.finish_p, t.date_p, 
        t.dc_position, t.dc_name, t.dc_pay, t.dc_room, t.status_id, status.status_name, t.c_id
        FROM `status` INNER JOIN 
            (SELECT userp.dc_id, userp.petition_id, userp.user_id, userp.name_id, name_title.name_title, userp.user_name, userp.user_surname, 
             userp.start_p, userp.finish_p, userp.date_p, userp.dc_position, userp.dc_name, userp.dc_pay, userp.dc_room, userp.status_id, userp.c_id 
                FROM `name_title` INNER JOIN 
                (SELECT pdc.dc_id, pdc.petition_id, pdc.user_id, pdc.start_p, pdc.finish_p, pdc.date_p, pdc.dc_position, pdc.dc_name, pdc.dc_pay, pdc.dc_room, 
                 user.name_id, user.user_name, user.user_surname, pdc.status_id, pdc.c_id
                     FROM `user`  INNER JOIN
                    (SELECT petition_id, start_p, finish_p, date_p, user_id, status_id, petition.dc_id, c_id, dc_name, dc_position, dc_pay, dc_room 
                     FROM `petition` INNER JOIN `detail_company` ON petition.dc_id = detail_company.dc_id) AS pdc ON user.user_id = pdc.user_id) AS userp ON userp.name_id = name_title.name_id) AS t
                     ON t.status_id = status.status_id
                     WHERE petition_id = '$petition_id'
                     ORDER BY petition_id";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
            $dc_id = $my_row['dc_id'];
            $petition_id = $my_row['petition_id'];
            $user_id = $my_row['user_id'];
            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];
            $dc_position = $my_row['dc_position'];
            $dc_name = $my_row['dc_name'];
            $dc_pay = $my_row['dc_pay'];
            $dc_room = $my_row['dc_room'];
            $status_id = $my_row['status_id'];
            $status_name = $my_row['status_name'];
            $c_id = $my_row['c_id'];
        require("connection_close.php");

        return new petitionDcModel($dc_id, $petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p, 
        $dc_position,$dc_name, $dc_pay, $dc_room, $status_id, $status_name, $c_id);
    }


    public static function getAll()
    {
        $petionDcList = [];
        require("connection_connect.php");
        $sql = "SELECT t.dc_id, t.petition_id, t.user_id, t.name_title, t.user_name, t.user_surname, t.start_p, t.finish_p, t.date_p, 
        t.dc_position, t.dc_name, t.dc_pay, t.dc_room, t.status_id, status.status_name, t.c_id
        FROM `status` INNER JOIN 
            (SELECT userp.dc_id, userp.petition_id, userp.user_id, userp.name_id, name_title.name_title, userp.user_name, userp.user_surname, 
             userp.start_p, userp.finish_p, userp.date_p, userp.dc_position, userp.dc_name, userp.dc_pay, userp.dc_room, userp.status_id, userp.c_id 
                FROM `name_title` INNER JOIN 
                (SELECT pdc.dc_id, pdc.petition_id, pdc.user_id, pdc.start_p, pdc.finish_p, pdc.date_p, pdc.dc_position, pdc.dc_name, pdc.dc_pay, pdc.dc_room, 
                 user.name_id, user.user_name, user.user_surname, pdc.status_id, pdc.c_id
                     FROM `user`  INNER JOIN
                    (SELECT petition_id, start_p, finish_p, date_p, user_id, status_id, petition.dc_id, c_id, dc_name, dc_position, dc_pay, dc_room 
                     FROM `petition` INNER JOIN `detail_company` ON petition.dc_id = detail_company.dc_id) AS pdc ON user.user_id = pdc.user_id) AS userp ON userp.name_id = name_title.name_id) AS t
                     ON t.status_id = status.status_id
                     ORDER BY petition_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $dc_id = $my_row['dc_id'];
            $petition_id = $my_row['petition_id'];
            $user_id = $my_row['user_id'];
            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];
            $dc_position = $my_row['dc_position'];
            $dc_name = $my_row['dc_name'];
            $dc_pay = $my_row['dc_pay'];
            $dc_room = $my_row['dc_room'];
            $status_id = $my_row['status_id'];
            $status_name = $my_row['status_name'];
            $c_id = $my_row['c_id'];
            $petionDcList[] = new petitionDcModel($dc_id, $petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p, 
            $dc_position,$dc_name, $dc_pay, $dc_room, $status_id, $status_name, $c_id);

        }
        require("connection_close.php");
        return $petionDcList;

    }

    public static function Add($petition_id, $start_p, $finish_p, $date_p, $user_id, $status_id, $dc_id)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `petition`(`petition_id`, `start_p`, `finish_p`, `date_p`, `user_id`, `status_id`, `dc_id`,) 
        VALUES ('$petition_id','$start_p','$finish_p','$date_p','$user_id','$status_id','$dc_id')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return;
    }

  public static function update($petition_id, $status_id)
  {
      require("connection_connect.php");
      $sql = "UPDATE `petition` SET `status_id`='$status_id'WHERE petition_id = '$petition_id'";
      $result = $conn->query($sql);
      require("connection_close.php");
      return "update success $result row";
  }

  public static function delete($petition_id)
  {
      require("connection_connect.php");
      $sql = "DELETE FROM `petition` WHERE petition_id = '$petition_id'";
      $result = $conn->query($sql);
      require("connection_close.php");
      return "delete success $result row";
  }

  public static function search($key)
    {
        $petionDcList = [];
        require("connection_connect.php");
        $sql = "SELECT t.dc_id, t.petition_id, t.user_id, t.name_title, t.user_name, t.user_surname, t.start_p, t.finish_p, t.date_p, 
        t.dc_position, t.dc_name, t.dc_pay, t.dc_room, t.status_id, status.status_name, t.c_id
        FROM `status` INNER JOIN 
            (SELECT userp.dc_id, userp.petition_id, userp.user_id, userp.name_id, name_title.name_title, userp.user_name, userp.user_surname, 
             userp.start_p, userp.finish_p, userp.date_p, userp.dc_position, userp.dc_name, userp.dc_pay, userp.dc_room, userp.status_id, userp.c_id 
                FROM `name_title` INNER JOIN 
                (SELECT pdc.dc_id, pdc.petition_id, pdc.user_id, pdc.start_p, pdc.finish_p, pdc.date_p, pdc.dc_position, pdc.dc_name, pdc.dc_pay, pdc.dc_room, 
                 user.name_id, user.user_name, user.user_surname, pdc.status_id, pdc.c_id
                     FROM `user`  INNER JOIN
                    (SELECT petition_id, start_p, finish_p, date_p, user_id, status_id, petition.dc_id, c_id, dc_name, dc_position, dc_pay, dc_room 
                     FROM `petition` INNER JOIN `detail_company` ON petition.dc_id = detail_company.dc_id) AS pdc ON user.user_id = pdc.user_id) AS userp ON userp.name_id = name_title.name_id) AS t
                     ON t.status_id = status.status_id
                     ORDER BY petition_id
                    WHERE (t.dc_id like '%$key%' or t.petition_id like '%$key%' or t.user_id like '%$key%' 
                    or t.name_title like '%$key%' or t.user_name like '%$key%' or t.user_surname like '%$key%' or t.start_p like '%$key%'
                    or t.finish_p like '%$key%' or t.date_p like '%$key%' or t.dc_position like '%$key%' or t.dc_name like '%$key%'
                    or t.dc_pay like '%$key%'or t.dc_room like '%$key%' or t.status_id like '%$key%' or status.status_name like '%$key%'
                    or t.c_id like '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $dc_id = $my_row['dc_id'];
            $petition_id = $my_row['petition_id'];
            $user_id = $my_row['user_id'];
            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];
            $dc_position = $my_row['dc_position'];
            $dc_name = $my_row['dc_name'];
            $dc_pay = $my_row['dc_pay'];
            $dc_room = $my_row['dc_room'];
            $status_id = $my_row['status_id'];
            $status_name = $my_row['status_name'];
            $c_id = $my_row['c_id'];
            $petionDcList[] = new petitionDcModel($dc_id, $petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p, 
            $dc_position,$dc_name, $dc_pay, $dc_room, $status_id, $status_name, $c_id);
        }
        require("connection_close.php");
        return $petionDcList;
    }




}?>