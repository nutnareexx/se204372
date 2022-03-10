<?php echo "  <br><br>ยืนยันที่จะลบข้อมูลนี้หรือไม่?<br>
            <br><b>ที่ : </b>   $DetailCompanyPList->dc_id  
            <br><b>ชื่อสถานประกอบการ/หน่วยงาน : </b>  $DetailCompanyPList->dc_name
            <br><b>ตำแหน่งงานที่ต้องการรับ : </b>  $DetailCompanyPList->dc_position
            <br><b>แผนกฝ่าย : </b> $DetailCompanyPList->dc_department
            <br><b>จำนวน(คน) : </b> $DetailCompanyPList->dc_num
            <br><b>ความสามารถทีมีหรือทักษะที่ควรมี : </b> $DetailCompanyPList->dc_skills    
            <br><b>ลักษณะงานที่ต้องปฏิบัติ : </b> $DetailCompanyPList->dc_nature 
            <br><b>จำนวนค่าตอบแทน : </b> $DetailCompanyPList->dc_pay
            <br><b>ที่พัก : </b> $DetailCompanyPList->dc_room
            <br><b>สวัสดิการอื่นๆ : </b> $DetailCompanyPList->dc_benefit
            <br><b>การคัดเลือก : </b> $DetailCompanyPList->dc_select
            <br>";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="companyP"/>
    <input type="hidden" name="dcid" value="<?php echo $DetailCompanyPList->dc_id;?>"/>
    <br><button type="submit" name="action" value="indexP">Back</button>
    <button type="submit" name="action" value="deleteP">Delete</button>
</form>