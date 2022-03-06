<form method="get" action="">
    <br>
    <label>ลำดับที่<input type="text" name="petition_id"/></label><br>

    <label>
        รหัสนิสิต<select name="user_id">
            <option value="">--เลือก--</option>
            <?php foreach($userList as $newuser)
            {
                echo "<option value=$newuser->user_id</option";
            }?>
        </select>
    </label>
    <br>

    <label>เริ่มฝึกงาน<input type="date" name="start_p"/></label><br>
    <label>สิ้นสุดการฝึกงาน<input type="date" name="finish_p"/></label><br>

    <label>
        ชื่อสถานประกอบการ<select name="dc_id">
            <option value="">--เลือก--</option>
            <?php foreach($DetailCompanyList as $newDCompany)
            {
                echo "<option value=$newDCompany->dc_id>$newDCompany->dc_name</option>";
            }?>
        </select>
    </label>













</form>