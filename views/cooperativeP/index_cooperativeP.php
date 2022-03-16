<br><br>เพิ่มสถานประกอบการณ์ใหม่ <a href=?controller=cooperativeP&action=newCooperative>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="cooperativeP"/>
    <button type="submit" name="action" value="search">
Search</button>
</body></form></html>
<table border = 1>
<tr> <td><b>ที่</td>
<td><b>ชื่อสถานประกอบการ/หน่วยงาน</td>
<td><b>ตำแหน่งงานที่ต้องการรับ</td>
<td><b>แผนกฝ่าย</td>
<td><b>จำนวน(คน)</td>
<td><b>ความสามารถทีหรือทักษะที่ควรมี</td>
<td><b>ลักษณะงานที่ต้องปฏิบัติ</td>
<td><b>จำนวนค่าตอบแทน</td>
<td><b>ที่พัก</td>
<td><b>สวัสดิการอื่นๆ</td>
<td><b>การคัดเลือก</td>
<td><b>Update</td><td><b>Delete</td> </tr>
<?php foreach( $cooperativePList as  $c)
{
    echo "<tr> <td>$c->c_id</td>
    <td>$c->c_name</td>
    <td>$c->c_position</td>
    <td>$c->c_department</td>
    <td>$c->c_num</td>
    <td>$c->c_skills</td>
    <td>$c->c_nature</td>
    <td>$c->c_pay</td>
    <td>$c->c_room</td>
    <td>$c->c_benefit</td>
    <td>$c->c_select</td>
    <td>  <a href=?controller=cooperativeP&action=updateforms&c_id=$c->c_id> update </a> </td>
    <td>  <a href=?controller=cooperativeP&action=deleteconfirm&c_id=$c->c_id> delete</a> </td></tr>";
}
echo "</table>";
 ?>