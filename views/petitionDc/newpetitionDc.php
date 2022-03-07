
<form method="get" action="">
    <br>

   
    <label>รหัสนิสิต<input type="text" name="user_id"/></label><br><br>
    
    <label>คำนำหน้า<select name="name_id">
        <option value="">--เลือก--</option>
        <?php foreach($nametitleList as $newtt){
            echo "<option value=$newtt->name_id>$newtt->name_title</option>";
        }?>
        </select></label><br><br>

    <label>ชื่อ<input type="text" name="user_name"/></label>
    <label>นามสกุล<input type="text" name="user_name"/></label><br><br>

    <label>เริ่มฝึกงาน<input type="date" name="start_p"/></label>
    <label>สิ้นสุดการฝึกงาน<input type="date" name="finish_p"/></label><br><br>

    <label>ตำแน่งที่ไปฝึกงาน<select name="dc_id">
        <option value="">--เลือก--</option>
        <?php foreach($DetailCompanyList as $newdc){
            echo "<option value=$newdc->dc_id>$newdc->dc_position</option>";
        }?>
        </select></label><br><br>

    
    <label>ชื่อสถานประกอบการฝึกงาน<select name="dc_id">
        <option value="">--เลือก--</option>
        <?php foreach($DetailCompanyList as $newdc){
            echo "<option value=$newdc->dc_id>$newdc->dc_name</option>";
        }?>
        </select></label><br><br>

   
    <input type="hidden" name="controller" value="petitionDC"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addpetitionDc">Save</button>













</form>