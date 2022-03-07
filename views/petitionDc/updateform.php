

<form method="get" action="">
    
    <br><label><b>ลำดับที่<input type="text" name="petition_id"
        value="<?php echo $petionDcList->petition_id;?>"/>
    </select></label><br><br>

    <label><b>รหัสนิสิต<input type="text" name="user_id"
        value="<?php echo $petionDcList->user_id;?>"/>
    </select></label><br><br>

    <label><b>คำนำหน้า<input type="text" name="name_id"
        value="<?php echo $petionDcList->name_title;?>"/>
    </select></label>

    <label><b>ชื่อ<input type="text" name="user_id"
        value="<?php echo $petionDcList->user_name  ;?>"/>
    </select></label>

    <label><b>นามสกุล<input type="text" name="user_id"
        value="<?php echo $petionDcList->user_surname  ;?>"/>
    </select></label><br><br>

    <label><b>เริ่มฝึกงาน<input type="text" name="user_id"
        value="<?php echo $petionDcList->start_p  ;?>"/>
    </select></label>

    <label><b>สิ้นสุดการฝึกงาน<input type="text" name="user_id"
        value="<?php echo $petionDcList->finish_p;?>"/>
    </select></label><br><br>

    <label><b>ชื่อสถานประกอบการฝึกงาน<input type="text" name="dc_id"
        value="<?php echo $petionDcList->dc_name  ;?>"/>
    </select></label>

    <label><b>ค่าตอบแทน<input type="text" name="dc_id"
        value="<?php echo $petionDcList->dc_pay  ;?>"/>
    </select></label>

    <label><b>ที่พัก<input type="text" name="dc_id"
        value="<?php echo $petionDcList->dc_room;?>"/>
    </select></label><br><br>

    <label>สถานะ <select name="status_id">
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
    <br><br><button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>











</form>