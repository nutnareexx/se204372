

<form method="get" action="">




<?php echo "
            <br><b>ลำดับที่ : </b>   $petionCList->petition_id  
            <br><b>รหัสนิสิต : </b>  $petionCList->user_id
            <br><b>ชื่อ-นามสกุล : </b>  $petionCList->name_title$petionCList->user_name $petionCList->user_surname
            <br><b>ระยะเวลาฝึกสหกิจ : </b> $petionCList->start_p - $petionCList->finish_p 
            <br><b>ตำแหน่งที่ไปสหกิจ : </b> $petionCList->c_position
            <br><b>ชื่อสถานประกอบการสหกิจ : </b> $petionCList->c_name    
            <br><b>ค่าตอบแทน : </b> $petionCList->c_pay 
            <br><b>ที่พัก : </b> $petionCList->c_room<br>";?>


   
    <label><b>อัพเดตสถานะ </b> <select name="status_id">
        <?php foreach($statusList as $st){
            echo "<option value=$st->status_id";
            if($st->status_id==$petionCList->status_id){
                echo " selected='selected'";
            }
            echo ">$st->status_name</option>";
        }?>
        </select></label><br> 
        

   

    <input type="hidden" name="controller" value="petitionC"/>
    <input type="hidden" name="petitionid" value="<?php echo $petionCList->petition_id;?>"/>
    <br><button type="submit" name="action" value="indexC"> Back </button>
    <button type="submit" name="action" value="updateC"> Update </button>











</form>