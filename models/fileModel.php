<?php
class fileModel{

    public $fid;
    public $fname;
    public $fdate;

    public function __construct($id,$name,$date)
    {
        $this->fid = $id;
        $this->fname = $name;
        $this->fdate = $date; 
    }

    public static function getAll(){
        $fileList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `file`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $fid = $my_row['file_id'];
            $fname = $my_row['fileupload'];
            $fdate = $my_row['dateupload'];
            $fileList[] = new fileModel($fid,$fname,$fdate);
        }
        require("connection_close.php");
        return $fileList;

    } 
}
?>