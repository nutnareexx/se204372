

<form method="get" action="">


            <br><label>ชื่อสถานประกอบการ/หน่วยงาน <input type="text" name="dc_name"
                value="<?php echo  $DetailCompanyPList->dc_name;?>"/> </label><br>

            <br><label>ตำแหน่งงานที่ต้องการรับ <input type="text" name="dc_position"
                value="<?php echo  $DetailCompanyPList->dc_position;?>"/> </label><br>

            <br><label>แผนกฝ่าย <input type="text" name="dc_department"
                value="<?php echo  $DetailCompanyPList->dc_department;?>"/> </label><br>

            <br><label>จำนวน(คน) <input type="text" name="dc_num"
                value="<?php echo  $DetailCompanyPList->dc_num;?>"/> </label><br>

            <br><label>ความสามารถทีมีหรือทักษะที่ควรมี <input type="text" name="dc_skills"
                value="<?php echo  $DetailCompanyPList->dc_skills;?>"/> </label><br>

            <br><label>ลักษณะงานที่ต้องปฏิบัติ <input type="text" name="dc_nature"
                value="<?php echo  $DetailCompanyPList->dc_nature;?>"/> </label><br>

            <br><label>จำนวนค่าตอบแทน <input type="text" name="dc_pay"
                value="<?php echo  $DetailCompanyPList->dc_pay;?>"/> </label><br>

            <br><label>ที่พัก <input type="text" name="dc_room"
                value="<?php echo  $DetailCompanyPList->dc_room;?>"/> </label><br>

            <br><label>สวัสดิการอื่นๆ <input type="text" name="dc_benefit"
                value="<?php echo  $DetailCompanyPList->dc_benefit;?>"/> </label><br>

            <br><label>การคัดเลือก <input type="text" name="dc_select"
                value="<?php echo  $DetailCompanyPList->dc_select;?>"/> </label><br>



    <input type="hidden" name="controller" value="companyP"/>
    <input type="hidden" name="dcid" value="<?php echo $DetailCompanyPList->dc_id;?>"/>
    <br><button type="submit" name="action" value="indexP"> Back </button>
    <button type="submit" name="action" value="updateP"> Update </button>











</form>