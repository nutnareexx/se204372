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

    input[type=text], select {
        font-family: 'Prompt', sans-serif;
        width: 80%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 50px;
        box-sizing: border-box;
    }
    input[type=date], select {
        font-family: 'Prompt', sans-serif;
        width: 80%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 50px;
        box-sizing: border-box;
            
    }
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
  
    <h2><b>ยื่นคำร้องฝึกงาน <br></h2>

    </div>

<form method="get" action="">
    <br>

   
    <label>รหัสนิสิต : <input type="text" name="user_id"/></label><br><br>
    
    <label>คำนำหน้า : <select name="name_id">
        <option value="">--เลือก--</option>
        <?php foreach($nametitleList as $newtt){
            echo "<option value=$newtt->name_id>$newtt->name_title</option>";
        }?>
        </select></label><br><br>

    <label>ชื่อ : <input type="text" name="user_name"/></label><br>
    <label>นามสกุล : <input type="text" name="user_surname"/></label><br><br>

    <label>เริ่มฝึกงาน : <input type="date" name="start_p"/></label><br>
    <label>สิ้นสุดการฝึกงาน : <input type="date" name="finish_p"/></label><br><br>

    <label>ตำแน่งที่ไปฝึกงาน : <input type="text" name="dc_position"/></label><br><br>
    <label>ชื่อสถานประกอบการฝึกงาน : <input type="text" name="dc_name"/></label><br><br>

   
    <input type="hidden" name="controller" value="petitionDCUser"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addpetitionDc">Save</button>



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