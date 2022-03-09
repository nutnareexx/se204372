<?php
class petitionCModel{
    public $petition_id;
    public $user_id;
    public $name_title;
    public $user_name;
    public $user_surname;
    public $start_p;
    public $finish_p;
    public $date_p;
    public $c_position;
    public $c_name;
    public $c_pay;
    public $c_room;   
    public $c_id;
    public $status_id;
    public $status_name;
    public $dc_id;
 

    public function __construct($petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p,
    $date_p, $c_position, $c_name, $c_pay, $c_room, $c_id, $status_id, $status_name, $dc_id)
    {
        $this->petition_id = $petition_id;
        $this->user_id = $user_id;
        $this->name_title = $name_title;
        $this->user_name = $user_name;
        $this->user_surname = $user_surname;
        $this->start_p = $start_p;
        $this->finish_p = $finish_p;
        $this->date_p =  $date_p;
        $this->c_position = $c_position;
        $this->c_name = $c_name;
        $this->c_pay = $c_pay;
        $this->c_room = $c_room;   
        $this->c_id = $c_id; 
        $this->status_id = $status_id;
        $this->status_name = $status_name;
        $this->dc_id = $dc_id;
        
    }

    public static function get($petition_id)
    {
        
        require("connection_connect.php");
        $sql = "SELECT t.petition_id, t.user_id, t.name_title, t.user_name, t.user_surname, t.start_p, t.finish_p, t.date_p, t.c_position, t.c_name, t.c_pay, t.c_room, t.c_id, t.status_id, status.status_name,t.dc_id
        FROM status INNER JOIN 
        (SELECT uc.petition_id, uc.user_id, name_title.name_title, uc.user_name, uc.user_surname, uc.start_p, uc.finish_p, uc.date_p, uc.c_position, uc.c_name,uc.c_pay,
            uc.c_room, uc.c_id, uc.status_id, uc.dc_id
            FROM name_title INNER JOIN
                (SELECT pc.petition_id, pc.user_id,user.name_id, user.user_name, user.user_surname, pc.start_p, pc.finish_p,pc.date_p, pc.c_position, pc.c_name, pc.c_pay, pc.c_room,
                pc.c_id, pc.status_id, pc.dc_id
                    FROM user INNER JOIN 
                    (SELECT petition_id, user_id, start_p, finish_p,date_p, detail_cooperative.c_position, detail_cooperative.c_name, detail_cooperative.c_pay, detail_cooperative.c_room, petition.c_id,status_id, petition.dc_id
                    FROM petition INNER JOIN detail_cooperative ON petition.c_id = detail_cooperative.c_id) AS pc ON pc.user_id = user.user_id) AS uc ON uc.name_id = name_title.name_id) AS t
                    ON t.status_id = status.status_id
                    WHERE petition_id = '$petition_id'
                    ORDER BY petition_id";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
            
            $petition_id = $my_row['petition_id'];
            $user_id = $my_row['user_id'];
            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];
            $date_p = $my_row['date_p'];
            $c_position = $my_row['c_position'];
            $c_name = $my_row['c_name'];
            $c_pay = $my_row['c_pay'];
            $c_room = $my_row['c_room'];
            $c_id = $my_row['c_id'];
            $status_id = $my_row['status_id'];
            $status_name = $my_row['status_name']; 
            $dc_id = $my_row['dc_id'];
        require("connection_close.php");

        return new petitionCModel($petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p,
        $date_p, $c_position, $c_name, $c_pay, $c_room, $c_id, $status_id, $status_name, $dc_id);
    }


    public static function getAll()
    {
        $petionCList = [];
        require("connection_connect.php");
        $sql = "SELECT t.petition_id, t.user_id, t.name_title, t.user_name, t.user_surname, t.start_p, t.finish_p, t.date_p, t.c_position, t.c_name, t.c_pay, t.c_room, t.c_id, t.status_id, status.status_name,t.dc_id
        FROM status INNER JOIN 
        (SELECT uc.petition_id, uc.user_id, name_title.name_title, uc.user_name, uc.user_surname, uc.start_p, uc.finish_p, uc.date_p, uc.c_position, uc.c_name,uc.c_pay,
            uc.c_room, uc.c_id, uc.status_id, uc.dc_id
            FROM name_title INNER JOIN
                (SELECT pc.petition_id, pc.user_id,user.name_id, user.user_name, user.user_surname, pc.start_p, pc.finish_p,pc.date_p, pc.c_position, pc.c_name, pc.c_pay, pc.c_room,
                pc.c_id, pc.status_id, pc.dc_id
                FROM user INNER JOIN 
                    (SELECT petition_id, user_id, start_p, finish_p,date_p, detail_cooperative.c_position, detail_cooperative.c_name, detail_cooperative.c_pay, detail_cooperative.c_room, petition.c_id,status_id, petition.dc_id
                    FROM petition INNER JOIN detail_cooperative ON petition.c_id = detail_cooperative.c_id) AS pc ON pc.user_id = user.user_id) AS uc ON uc.name_id = name_title.name_id) AS t
                    ON t.status_id = status.status_id
                    GROUP BY petition_id;";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $petition_id = $my_row['petition_id'];
            $user_id = $my_row['user_id'];
            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];
            $date_p = $my_row['date_p'];
            $c_position = $my_row['c_position'];
            $c_name = $my_row['c_name'];
            $c_pay = $my_row['c_pay'];
            $c_room = $my_row['c_room'];
            $c_id = $my_row['c_id'];
            $status_id = $my_row['status_id'];
            $status_name = $my_row['status_name']; 
            $dc_id = $my_row['dc_id'];
            $petionCList[] = new petitionCModel($petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p,
            $date_p, $c_position, $c_name, $c_pay, $c_room, $c_id, $status_id, $status_name, $dc_id);

        }
        require("connection_close.php");
        return $petionCList;

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
        $petionCList = [];
        require("connection_connect.php");
        $sql = "SELECT t.petition_id, t.user_id, t.name_title, t.user_name, t.user_surname, t.start_p, t.finish_p, t.date_p, t.c_position, t.c_name, t.c_pay, t.c_room, t.c_id, t.status_id, status.status_name,t.dc_id
        FROM status INNER JOIN 
        (SELECT uc.petition_id, uc.user_id, name_title.name_title, uc.user_name, uc.user_surname, uc.start_p, uc.finish_p, uc.date_p, uc.c_position, uc.c_name,uc.c_pay,
            uc.c_room, uc.c_id, uc.status_id, uc.dc_id
            FROM name_title INNER JOIN
                (SELECT pc.petition_id, pc.user_id,user.name_id, user.user_name, user.user_surname, pc.start_p, pc.finish_p,pc.date_p, pc.c_position, pc.c_name, pc.c_pay, pc.c_room,
                pc.c_id, pc.status_id, pc.dc_id
                FROM user INNER JOIN 
                    (SELECT petition_id, user_id, start_p, finish_p,date_p, detail_cooperative.c_position, detail_cooperative.c_name, detail_cooperative.c_pay, detail_cooperative.c_room, petition.c_id,status_id, petition.dc_id
                    FROM petition INNER JOIN detail_cooperative ON petition.c_id = detail_cooperative.c_id) AS pc ON pc.user_id = user.user_id) AS uc ON uc.name_id = name_title.name_id) AS t
                    ON t.status_id = status.status_id
                     
                    WHERE (t.petition_id like '%$key%' or t.user_id like '%$key%' 
                    or t.name_title like '%$key%' or t.user_name like '%$key%' or t.user_surname like '%$key%' or t.start_p like '%$key%'
                    or t.finish_p like '%$key%' or t.date_p like '%$key%' or t.c_position like '%$key%' or t.c_name like '%$key%'
                    or t.c_pay like '%$key%'or t.c_room like '%$key%' or t.c_id like '%$key%' or t.status_id like '%$key%' 
                    or status.status_name like '%$key%'
                    or t.dc_id like '%$key%')
                    ORDER BY petition_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $petition_id = $my_row['petition_id'];
            $user_id = $my_row['user_id'];
            $name_title = $my_row['name_title'];
            $user_name = $my_row['user_name'];
            $user_surname = $my_row['user_surname'];
            $start_p = $my_row['start_p'];
            $finish_p = $my_row['finish_p'];
            $date_p = $my_row['date_p'];
            $c_position = $my_row['c_position'];
            $c_name = $my_row['c_name'];
            $c_pay = $my_row['c_pay'];
            $c_room = $my_row['c_room'];
            $c_id = $my_row['c_id'];
            $status_id = $my_row['status_id'];
            $status_name = $my_row['status_name']; 
            $dc_id = $my_row['dc_id'];
            $petionCList[] = new petitionCModel($petition_id, $user_id, $name_title, $user_name, $user_surname, $start_p, $finish_p,
            $date_p, $c_position, $c_name, $c_pay, $c_room, $c_id, $status_id, $status_name, $dc_id);
        }
        require("connection_close.php");
        return $petionCList;
    }




}?>