<?php echo "<br><br>ยืนยันที่จะลบข้อมูลนี้หรือไม่? <br>
            <br> ชื่อสถานประกอบการ/หน่วยงาน:$cooperativePList->c_name 
            <br>ตำแหน่งงานที่ต้องการรับ:$cooperativePList->c_position  
            <br>แผนกฝ่าย:$cooperativePList->c_department 
            <br>จำนวน(คน):$cooperativePList->c_num  
            <br>ความสามารถทีหรือทักษะที่ควรมี:$cooperativePList->c_skills 
            <br>ลักษณะงานที่ต้องปฏิบัติ:$cooperativePList->c_nature
            <br>จำนวนค่าตอบแทน:$cooperativePList->c_pay
            <br>ที่พัก:$cooperativePList->c_room
            <br>สวัสดิการอื่นๆ:$cooperativePList->c_benefit
            <br>การคัดเลือก:$cooperativePList->c_select
            <br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="cooperativeP"/>
    <input type="hidden" name="cid" value="<?php echo $cooperativePList->c_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
