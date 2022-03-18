


<!DOCTYPE html>
<html>
<head>
        
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
    padding: 5px 40px;
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
    padding: 10px;
    border-radius: 10px;
    
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

.table {
    font-family: 'Prompt', sans-serif;
    border-collapse: collapse;
    
    text-align: center;
    background: #f2f2f2;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd){background-color: #cae3cc}
tr:nth-child(even){background-color: #f2f2f2}

input[type=text], select {
            font-family: 'Prompt', sans-serif;
            width: 50%;
            padding: 5px 5px;
            margin: 8px 0;
            font-size: 16px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
        }

        .btn-group .button {
            font-family: 'Prompt', sans-serif;
            position: relative;
            background-color: #73c088 ; /* Green */
            border: 1px black;
            color: white;
            padding: 7px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            /*float: center;*/
            border-radius: 50px;
        }

        .btn-group .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .btn-group .button:hover {
            background-color: #ddd;
            color: black;
        }

        .btn-group2 .button2 {
            font-family: 'Prompt', sans-serif;
            position: relative;
             background-color: #73c088 ; /*Green */
            border: 1px black;
            color: white;
            padding: 7px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block; 
            font-size: 16px;
            cursor: pointer;
            float: center;
            border-radius: 50px;
        }

        .btn-group2 .button2:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .btn-group2 .button2:hover {
            background-color: #ddd;
            color: black;
        }
</style>


<body>

<div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-tree-alt'></i>
            <span class="logo_name">KASETSART UNIVERSITY</span>
        </div>
    <dl class="nav-links">
        <li>
            <a href="?controller=Aj&action=index">
            <i class='bx bx-home'></i>
                <span class="link_name">หน้าแรก</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=Aj&action=index">หน้าแรก</a></li>
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
                <li><a href="?controller=companyP&action=indexP">ฝึกงาน</a></li>
                <li><a href="?controller=cooperativeP&action=index">สหกิจ</a></li>
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
                <li><a class="link_name" href="?controller=considerAj&action=index">พิจาราณาคำร้องขอฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=graphAj&action=index">
                <i class='bx bx-line-chart' ></i>
                <span class="link_name">สถานการณ์ยื่นคำร้องนิสิต</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=graphAj&action=index">สถานการณ์ยื่นคำร้องนิสิต</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=reportPetition&action=index">
                <i class='bx bx-file-blank' ></i>
                <span class="link_name">รายงานสรุปการอนุมัติฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=reportPetition&action=index">รายงานสรุปการอนุมัติฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=bookAj&action=index">
                <i class='bx bx-book' ></i>
                <span class="link_name">ออกหนังสือขอความอนุเคราะห์</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=bookAj&action=index">ออกหนังสือขอความอนุเคราะห์</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=checkHistory&action=index">
                <i class='bx bx-notepad'></i>
                <span class="link_name">ตรวจสอบประวัติการฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=checkHistory&action=index">ตรวจสอบประวัติการฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="?controller=uploadAj&action=index">
                <i class='bx bx-upload'></i>
                <span class="link_name">อัพโหลดประกาศ</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=uploadAj&action=index">อัพโหลดประกาศ</a></li>
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
            <a href="?controller=user&action=logoutAj">          
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
    <!-- เขียนตรงนี้นาจาาาาา -->
    <div class="header">
        <h2>รายละเอียดสถานประกอบการที่ประสงค์รับนิสิตฝึกงาน</h2>

    <h3>เพิ่มสถานประกอบการณ์ใหม่ <a href="?controller=companyP&action=newDetailCompanyP"> click!!! </a> </h3>
</div>

<form method="get" action="">
    <div class="btn-group2">
        <input type="text" name="key">
            <input type="hidden" name="controller" value="companyP"/>
            <button class="button2" type="submit" name="action" value="searchP">
                <i class='fas fa-search' style='font-size: 22px'></i> </button>

    </div>
    
</form>
    

<table>
    <tr>
        <th>ที่</th>
        <th>ชื่อสถานประกอบการ/หน่วยงาน</th>
        <th>ตำแหน่งงานที่ต้องการรับ</th>
        <th>แผนกฝ่าย</th>
        <th>จำนวน(คน)</th>
        <th>ความสามารถทีมีหรือทักษะที่ควรมี</th>
        <th>ลักษณะงานที่ต้องปฏิบัติ</ttd>
        <th>จำนวนค่าตอบแทน</th>
        <th>ที่พัก</th>
        <th>สวัสดิการอื่นๆ</th>
        <th>การคัดเลือก</th>
        <th>อัพเดตข้อมูล</th>
        <th>ลบข้อมูล</th>
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
    <td> <a href=?controller=companyP&action=updateformP&dc_id=$c->dc_id> <i class='fas fa-edit' style='font-size: 24px;'></i>  </a> </td>
    <td> <a href=?controller=companyP&action=deleteconfirmP&dc_id=$c->dc_id> <i class='fas fa-trash-alt' style='font-size: 24px;'></i> </a>
    </tr>
    ";
} 

echo "</table>";
?>

