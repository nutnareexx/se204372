<form method="get" action="">
        
    <label><b>ชื่อสถานประกอบการ/หน่วยงาน <input type="text" name="c_name"
        value="<?php echo  $cooperativePList->c_name;?>"/> </label><br>

    <label><b>ตำแหน่งงานที่ต้องการรับ <input type="text" name="c_position"
        value="<?php echo  $cooperativePList->c_position;?>"/> </label><br>

    <label><b>แผนกฝ่าย <input type="text" name="c_department"
        value="<?php echo  $cooperativePList->c_department;?>"/> </label><br>

    <label><b>จำนวน(คน) <input type="text" name="c_num"
        value="<?php echo  $cooperativePList->c_num;?>"/> </label><br>

    <label><b>ความสามารถทีหรือทักษะที่ควรมี <input type="text" name="c_skills"
        value="<?php echo  $cooperativePList->c_skills;?>"/> </label><br>

    <label><b>ลักษณะงานที่ต้องปฏิบัติ <input type="text" name="c_nature"
        value="<?php echo  $cooperativePList->c_nature;?>"/> </label><br>

    <label><b>จำนวนค่าตอบแทน <input type="text" name="c_pay"
        value="<?php echo  $cooperativePList->c_pay;?>"/> </label><br>

    <label><b>ที่พัก <input type="text" name="c_room"
        value="<?php echo  $cooperativePList->c_room;?>"/> </label><br>

    <label><b>สวัสดิการอื่นๆ <input type="text" name="c_benefit"
        value="<?php echo  $cooperativePList->c_benefit;?>"/> </label><br>

    <label><b>การคัดเลือก <input type="text" name="c_select"
        value="<?php echo  $cooperativePList->c_select;?>"/> </label><br>
    
    
    <input type="hidden" name="controller" value="cooperativeP"/>
    <input type="hidden" name="cid" value="<?php echo $cooperativePList->c_id;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>