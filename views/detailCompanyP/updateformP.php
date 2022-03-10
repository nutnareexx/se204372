

<form method="get" action="">




<?php echo "
            <br><b>ลำดับที่ : </b>   $petionDcList->petition_id  
            <br><b>รหัสนิสิต : </b>  $petionDcList->user_id
            <br><b>ชื่อ-นามสกุล : </b>  $petionDcList->name_title$petionDcList->user_name $petionDcList->user_surname
            <br><b>ระยะเวลาฝึกงาน : </b> $petionDcList->start_p - $petionDcList->finish_p 
            <br><b>ตำแหน่งที่ไปฝึกงาน : </b> $petionDcList->dc_position
            <br><b>ชื่อสถานประกอบการฝึกงาน : </b> $petionDcList->dc_name    
            <br><b>ค่าตอบแทน : </b> $petionDcList->dc_pay 
            <br><b>ที่พัก : </b> $petionDcList->dc_room<br>";?>


   
    <label><b>อัพเดตสถานะ </b> <select name="status_id">
        <?php foreach($statusList as $st){
            echo "<option value=$st->status_id";
            if($st->status_id==$petionDcList->status_id){
                echo " selected='selected'";
            }
            echo ">$st->status_name</option>";
        }?>
        </select></label><br> 
        

   

    <input type="hidden" name="controller" value="petitionDC"/>
    <input type="hidden" name="petitionid" value="<?php echo $petionDcList->petition_id;?>"/>
    <br><button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>











</form>