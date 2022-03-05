
<table border = 1>
    <tr>
        <td>ที่</td>
        <td>ชื่อสถานประกอบการ/หน่วยงาน</td>
        <td>ตำแหน่งงานที่ต้องการรับ</td>
        <td>แผนกฝ่าย</td>
        <td>จำนวน(คน)</td>
        <td>ความสามารถทีหรือทักษะที่ควรมี</td>
        <td>ลักษณะงานที่ต้องปฏิบัติ</td>
        <td>จำนวนค่าตอบแทน</td>
        <td>ที่พัก</td>
        <td>สวัสดิการอื่นๆ</td>
        <td>การคัดเลือก</td>
    </tr>

<?php foreach($DetailCompanyList as $c)
{
    echo "<tr>
    <td>$c->dc_id</td>
    <td>$c->dc_name</td>
    <td>$c->dc_position</td>
    <td>$c->dc_department</td>
    <td>$c->dc_num</td>
    <td>$c->dc_skills</td>
    <td>$c->dc_nature</td>
    <td>$c->dc_pay</td>
    <td>$c->dc_room</td>
    <td>$c->dc_benefit</td>
    <td>$c->dc_select</td>
    </tr>
    ";
} 

echo "</table>";
?>
