
<!DOCTYPE html>
<html>
<head>
    <link rel ="stylesheet" href="hamburger.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a href="?controller=considerAj&action=index">
                <i class='bx bx-file'></i>
                <span class="link_name">พิจาราณาคำร้องขอฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">พิจาราณาคำร้องขอฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=graphAj&action=index">
                <i class='bx bx-line-chart' ></i>
                <span class="link_name">สถานการณ์ยื่นคำร้องนิสิต</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">สถานการณ์ยื่นคำร้องนิสิต</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=reportPetition&action=index">
                <i class='bx bx-file-blank' ></i>
                <span class="link_name">รายงานสรุปการอนุมัติฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">รายงานสรุปการอนุมัติฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=bookAj&action=index">
                <i class='bx bx-book' ></i>
                <span class="link_name">ออกหนังสือขอความอนุเคราะห์</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">ออกหนังสือขอความอนุเคราะห์</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=checkHistory&action=index">
                <i class='bx bx-notepad'></i>
                <span class="link_name">ตรวจสอบประวัติการฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">ตรวจสอบประวัติการฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=uploadAj&action=index">
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
     <!--width="20%" height="20%">-->
    <h2>ตรวจสอบคำร้องฝึกงาน</h2>
</div>

<form method="get" action="">
    
    <input type="text" name="key">
    <input type="hidden" name="controller" value="petitionDC"/>
    <button type="submit" name="action" value="search">Search</button>

</form>


<table>
    <tr>
        <td><b>ลำดับที่</td>
        <td><b>รหัสนิสิต</td>
        <td><b>ชื่อ-นามสกุล</td>
        <td><b>ระยะเวลาฝึกงาน</td>
        <td><b>ตำแน่งที่ไปฝึกงาน</td>
        <td><b>ชื่อสถานประกอบการฝึกงาน</td>
        <td><b>ค่าตอบแทน</td>
        <td><b>ที่พัก</td>
        <td><b>สถานะ</td>
        <td><b>อัพเดตสถานะ</td>
        <td><b>ลบข้อมูล</td>
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

<?php foreach( $petionDcList as $dclist)
{
    echo "<tr> <td>$dclist->petition_id</td>
    <td>$dclist->user_id</td>
    <td>$dclist->name_title$dclist->user_name $dclist->user_surname</td>
    <td>$dclist->start_p - $dclist->finish_p</td>
    <td>$dclist->dc_position</td> 
    <td>$dclist->dc_name</td>  
    <td>$dclist->dc_pay</td> 
    <td>$dclist->dc_room</td> 
    <td>$dclist->status_name</td> 
    <td> <a href=?controller=petitionDC&action=updateform&petition_id=$dclist->petition_id> update </a> </td>
    <td> <a href=?controller=petitionDC&action=deleteconfirm&petition_id=$dclist->petition_id> delete </a>
    </td></tr>";
}
echo "</table>";
 ?>
