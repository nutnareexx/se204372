


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
                <li><a href="?controller=company&action=index">ฝึกงาน</a></li>
                <li><a href="?controller=cooperative&action=index">สหกิจ</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-file-blank' ></i>
                    <span class="link_name">ยื่นคำร้อง</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">ยื่นคำร้อง</a></li>
                <li><a href="?controller=petitionDCUser&action=index">ฝึกงาน</a></li>
                <li><a href="?controller=petitionCUser&action=index">สหกิจ</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=checkApproval&action=index">
                <i class='bx bx-check-square' ></i>
                <span class="link_name">ตรวจสอบผลการอนุมัติ</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">ตรวจสอบผลการอนุมัติ</a></li>
            </ul>
        </li>
        
        <li>
            <a href="?controller=downloadStudent&action=index">
            <i class='bx bx-download'></i>
            <span class="link_name">download</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">download</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=uploadStudent&action=index">
            <i class='bx bx-upload'></i>
            <span class="link_name">upload</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">upload</a></li>
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
    <!-- เขียนตรงนี้นาจาาาาาา -->
    
<div class="header">
     <h2>รายละเอียดสถานประกอบการที่ประสงค์รับนิสิตสหกิจ</h2>

    <h3>เพิ่มสถานประกอบการณ์ใหม่ <a href="?controller=cooperative&action=newCooperative"> click!!! </a> </h3>
</div>



<form method="get" action="">
    
    <input type="text" name="key">
    <input type="hidden" name="controller" value="cooperative"/>
    <button type="submit" name="action" value="search">Search</button>

</form>
    

<table>
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

<?php foreach($cooperativeList as $c)
{
    echo "<tr>
    <td>$c->c_id</td>
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
    </tr>
    ";
} 

echo "</table>";
?>

