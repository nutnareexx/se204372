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
  
    <h2><b>เพิ่มสถานประกอบการณ์ใหม่</h2>
    </div>

    
<form method="get" action="">
<label> ชื่อสถานประกอบการ/หน่วยงาน <input type = "text" name = "dc_name" /> </label></br>
<label> ตำแหน่งงานที่ต้องการรับ <input type = "text" name = "dc_position" /> </label></br>
<label> แผนกฝ่าย <input type = "text" name = "dc_department" /> </label></br>
<label> จำนวน(คน) <input type = "text" name = "dc_num" /> </label></br>
<label> ความสามารถทีมีหรือทักษะที่ควรมี <input type = "text" name = "dc_skills" /> </label></br>
<label> ลักษณะงานที่ต้องปฏิบัติ <input type = "text" name = "dc_nature" /> </label></br>
<label> จำนวนค่าตอบแทน <input type = "text" name = "dc_pay" /> </label></br>
<label> ที่พัก <input type = "text" name = "dc_room" /> </label></br>
<label> สวัสดิการอื่นๆ <input type = "text" name = "dc_benefit" /> </label></br>
<label> การคัดเลือก <input type = "text" name = "dc_select" /> </label></br>

<input type="hidden" name="controller" value="company"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="addDetailCompany">Save</button>

</form>

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

