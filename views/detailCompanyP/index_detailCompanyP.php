


<!DOCTYPE html>
<html>
<head>
        <link rel ="stylesheet" href="hamburger.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
<style>

    
    .header {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                text-align: center;
            }

table {
    font-family: 'Prompt', sans-serif;
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd){background-color: #cae3cc}
tr:nth-child(even){background-color: #f2f2f2}
</style>


<body>

<div class="sidebar ">
        <div class="logo-details">
            <i class='bx bxs-tree-alt'></i>
            <span class="logo_name">KASETSART UNIVERSITY</span>
        </div>
    <dl class="nav-links">
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-buildings'></i>
                    <span class="link_name">สถานประกอบการณ์</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">สถานประกอบการณ์</a></li>
                <li><a href="?controller=companyP&action=indexP">ฝึกงาน</a></li>
                <li><a href="?controller=companyC&action=index">สหกิจ</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-check-square'></i>
                    <span class="link_name">ตรวจสอบคำร้อง</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">ตรวจสอบคำร้อง</a></li>
                <li><a href="?controller=petitionDC&action=index">ฝึกงาน</a></li>
                <li><a href="?controller=petitionC&action=indexC">สหกิจ</a></li>
            </ul>
        </li>
        
        <li>
            <a href="#">
                <i class='bx bx-file'></i>
                <span class="link_name">พิจาราณาคำร้องขอฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">พิจาราณาคำร้องขอฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-line-chart' ></i>
                <span class="link_name">สถานการณ์ยื่นคำร้องนิสิต</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">สถานการณ์ยื่นคำร้องนิสิต</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-file-blank' ></i>
                <span class="link_name">รายงานสรุปการอนุมัติฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">รายงานสรุปการอนุมัติฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-book' ></i>
                <span class="link_name">ออกหนังสือขอความอนุเคราะห์</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">ออกหนังสือขอความอนุเคราะห์</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-notepad'></i>
                <span class="link_name">ตรวจสอบประวัติการฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">ตรวจสอบประวัติการฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-upload'></i>
                <span class="link_name">อัพโหลดประกาศ</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">อัพโหลดประกาศ</a></li>
            </ul>
        </li>
        <li>
        <div class="profile-details">
            <div class="profile-content">
                <i class='bx bxs-user'></i>
            </div>
            
                <div class="name-job">
                    <div class="profile_name">Name</div>
                </div>
            <i class='bx bx-log-out '></i>
        </div>
        </li>
    </dl>
</div>

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">ระบบบริหารจัดการการฝึกงานแบบออนไลน์</span>
    </div>
    <!-- เขียนตรงนี้นาจาาาาา -->
    <div class="header">
        <h2>รายละเอียดสถานประกอบการที่ประสงค์รับนิสิตฝึกงาน</h2>

    <h3>เพิ่มสถานประกอบการณ์ใหม่ <a href="?controller=companyP&action=newDetailCompanyP"> click!!! </a> </h3>
</div>

<form method="get" action="">
    
    <input type="text" name="key">
    <input type="hidden" name="controller" value="companyP"/>
    <button type="submit" name="action" value="searchP">Search</button>

</form>
    

<table>
    <tr>
        <td>ที่</td>
        <td>ชื่อสถานประกอบการ/หน่วยงาน</td>
        <td>ตำแหน่งงานที่ต้องการรับ</td>
        <td>แผนกฝ่าย</td>
        <td>จำนวน(คน)</td>
        <td>ความสามารถทีมีหรือทักษะที่ควรมี</td>
        <td>ลักษณะงานที่ต้องปฏิบัติ</td>
        <td>จำนวนค่าตอบแทน</td>
        <td>ที่พัก</td>
        <td>สวัสดิการอื่นๆ</td>
        <td>การคัดเลือก</td>
        <td>อัพเดตข้อมูล</td>
        <td>ลบข้อมูล</td>
    </tr>
</section>

<script>

let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++){
    arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu");
    });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
});

</script>



</body>

</html>

<?php foreach($DetailCompanyPList as $c)
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
    <td> <a href=?controller=companyP&action=updateformP&dc_id=$c->dc_id> update </a> </td>
    <td> <a href=?controller=companyP&action=deleteconfirmP&dc_id=$c->dc_id> delete </a>
    </tr>
    ";
} 

echo "</table>";
?>

