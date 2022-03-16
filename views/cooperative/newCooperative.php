<!DOCTYPE html>
<html>
<head>
        <link rel ="stylesheet" >
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>

body {
    font-family: 'Prompt', sans-serif;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 360px;
    background: #397d54;
    z-index: 100;
    transition: all 0.5s ease;
}

.sidebar.close{
    width: 78px;
}

/*.sidebar a:hover {
    color: #f1f1f1;
}*/
.sidebar .logo-details{
    height: 60px;
    width: 100%;
    display: flex;
    align-items: center;
}

.sidebar .logo-details i{
    font-size: 30px;
    color: #fff;
    height: 50px;
    min-width: 78px;
    text-align: center;
    line-height:50px;
    
}

.sidebar .logo-details .logo_name{
    font-size: 22px;
    color: #fff;
    font-weight: 600;
    transition:  0.3s ease;
    transition-delay: 0.1s;
}

.sidebar.close .logo-details .logo_name{
    transition-delay: 0s;
    opacity: 0;
    pointer-events: none;
}

.sidebar .nav-links{
     /*   background: red;*/
    height: 100%;
    padding-top:30px 0 150px 0;
    overflow: auto;
}

.sidebar .nav-links{
    overflow: visible;
}

.sidebar .nav-links::-webkit-scrollbar{
    display: none;
}

.sidebar .nav-links li{
    position: relative;
    list-style: none;
    transition: all 0.4s ease;
}

.sidebar .nav-links li:hover{
    background: #73c088;
}

.sidebar .nav-links li .iocn-link{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.sidebar.close .nav-links li .iocn-link{
    display: block;
}

.sidebar .nav-links li i{
    height: 50px;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    
}

.sidebar .nav-links li.showMenu i.arrow{
    transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
    display: none;
}

.sidebar .nav-links li a{
    display: flex;
    align-items: center;
    text-decoration: none;
    white-space: nowrap;
}

.sidebar .nav-links li a .link_name{
    font-size: 18px;
    font-weight: 400;
    color: #fff;
  
    
}
.sidebar.close .nav-links li a .link_name{
    opacity: 0;
    pointer-events: none;
}

.sidebar .nav-links li .sub-menu{
    padding: 6px 6px 14px 80px;
    margin-top: -10px;
    background: #397d54;
    display: none;
    
}

.sidebar .nav-links li.showMenu .sub-menu{
    display: block;
}

.sidebar .nav-links li .sub-menu a{
    color: #fff;
    font-size: 15px;
    padding: 5px 0;
    white-space: nowrap;
    opacity: 0.6;
    transition: all 0.3 ease;
}

.sidebar .nav-links li .sub-menu a:hover{
    opacity: 1;
}

.sidebar.close .nav-links li .sub-menu{
    position: absolute;
    left: 100%;
    top: -10px;
    margin-top: 0;
    padding: 10px 20px;
    border-radius: 0 6px 6px 0;
    
    opacity: 0;
    display: block;
    pointer-events: none;
    transition: 0s;
}


.sidebar.close .nav-links li:hover .sub-menu{
    top: 0;
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
}

.sidebar .nav-links li .sub-menu .link_name{
    display: none;
}


.sidebar.close .nav-links li .sub-menu .link_name{
    font-size: 18px;
    opacity: 1;
    display: block;
}

.sidebar .nav-link li .sub-menu.blank{
    opacity: 1;
    pointer-events: auto;
    padding: 3px 20px 6px 16px;
    opacity: 0;
    pointer-events: none;
   
}

.sidebar .nav-link li:hover .sub-menu.blank{
    top: 50%;
    transform: translateY(-50%);
}

.home-section{
    position: relative;
    background: #fff;
    height: 100vh;
    left: 360px;
    width: calc(100% - 360px);
    transition: all 0.5s ease;
}

.sidebar.close ~ .home-section{
    left: 78px;
    width: calc(100% - 78px);
}

.home-content{
    background: #235d3a;
}

.home-section .home-content{
    height: 60px;
    display: flex;
    align-items: center;
    
}

.home-section .home-content .bx-menu,
.home-section .home-content .text{
    color: #fff;
    font-size: 35px;
    white-space: nowrap;
}

.home-section .home-content .bx-menu{
    margin: 0 15px;
    cursor: pointer;
}

.home-section .home-content .text{
    font-size: 26px;
    font-weight: 500;
   
}

.sidebar .profile-details{
    position: fixed;
    bottom: 0;
    width: 360px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 6px 0;
    background: #73c088;
    transition: all 0.4s ease;
    white-space: nowrap;
    
}

.sidebar.close .profile-details{
    width: 78px;
    
}

.sidebar .profile-details .profile-content{
    display: flex;
    align-items: center;
    
}
.sidebar .profile-details li i{
    height: 50px;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
    
    
}

.sidebar .profile-details .profile_name{
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    width: 200px;
    text-align: center;
    white-space: nowrap;
}
.sidebar.close .profile-details li i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details a{
    display: none;
    
}

.sidebar .profile-details a{
    display: flex;
    align-items: center;
    text-decoration: none;
    white-space: nowrap;
}



@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}



    
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
<div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-tree-alt'></i>
            <span class="logo_name">KASETSART UNIVERSITY</span>
        </div>
    <dl class="nav-links">
        <li>
            <a href="?controller=nisit&action=index">
            <i class='bx bx-home'></i>
                <span class="link_name">หน้าแรก</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=nisit&action=index">หน้าแรก</a></li>
            </ul>
        </li>
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
            <a href="?controller=pages&action=home">          
                <i class='bx bx-log-out '></i>
            </a>
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
<label> ชื่อสถานประกอบการ/หน่วยงาน <input type = "text" name = "c_name" /> </label></br>
<label> ตำแหน่งงานที่ต้องการรับ <input type = "text" name = "c_position" /> </label></br>
<label> แผนกฝ่าย <input type = "text" name = "c_department" /> </label></br>
<label> จำนวน(คน) <input type = "text" name = "c_num" /> </label></br>
<label> ความสามารถทีหรือทักษะที่ควรมี <input type = "text" name = "c_skills" /> </label></br>
<label> ลักษณะงานที่ต้องปฏิบัติ <input type = "text" name = "c_nature" /> </label></br>
<label> จำนวนค่าตอบแทน <input type = "text" name = "c_pay" /> </label></br>
<label> ที่พัก <input type = "text" name = "c_room" /> </label></br>
<label> สวัสดิการอื่นๆ <input type = "text" name = "c_benefit" /> </label></br>
<label> การคัดเลือก <input type = "text" name = "c_select" /> </label></br>

<input type="hidden" name="controller" value="cooperative"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="addCooperative">Save</button>

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


