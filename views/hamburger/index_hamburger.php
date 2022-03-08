<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
        <title> Drop Down Sidebar Menu | CodingLab </title>
        <link rel ="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    background: #11101d;
   
    padding-top: 20px;
}



.sidebar a:hover {
    color: #f1f1f1;
}
.sidebar .logo-details{
    height: 60px;
    width: 100%;
    display: flex;
    align-items: center;
}

.sidebar .logo-details i{
    font-size: 50px;
    color: #fff;
    height: 50px;
    min-width: 120px;
    text-align: right;
    line-height:50px;
}

.sidebar .logo-details .logo_name{
    
    font-size: 22px;
    color: #fff;
    font-weight: 600;
    text-align: center;
}

.sidebar .nav-links{
        /*background: red;*/
    height: 100%;
    padding-top:30px 0 150px 0;
    overflow: auto;
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
    background: #1d1b31;
}

.sidebar .nav-links li .iocn-link{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.sidebar .nav-links li i{
    height: 50px;
    min-width: 50px;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 30px;
    transition: all 0.3s ease;
}

.sidebar .nav-links li.showMenu i.arrow{
    transform: rotate(-180deg);
}

.sidebar .nav-links li a{
    display: flex;
    align-items: center;
    text-decoration: none;
}

.sidebar .nav-links li a .link_name{
    font-size: 18px;
    font-weight: 400;
    color: #fff;
}

.sidebar .nav-links li .sub-menu{
    padding: 6px 6px 14px 80px;
    margin-top: -10px;
    background: #1d1b31;
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
    transition: all 0.4s ease;
    opacity: 0;
    pointer-events: none;
}


.sidebar.close .nav-links li:hover .sub-menu{
    top: 0;
    opacity: 1;
    pointer-events: auto;
}

.sidebar .nav-links li .sub-menu .link_name{
    display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
    font-size: 18px;
    opacity: 1;
    display: block;
}

.sidebar .nav-link li .sub-menu .blank{
    opacity: 1;
    pointer-events: auto;
    padding: 3px 20px 6px 16px;
}

.sidebar .nav-link li:hover .sub-menu .blank{
    top: 5;
    transform: translateY(-50%);
}

.home-section{
    position: relative;
    background: #cae3cc;
    height: 100vh;
    left: 352px;
    width: calc(100% - 250px);
    transition: all 0.5s ease;
}

.sidebar.close ~ .home-section{
    left: 78px;
    width: calc(100% - 78px);
}

.home-section .home-content{
    height: 60px;
    display: flex;
    align-items: center;
}

.home-section .home-content .bx-menu,
.home-section .home-content .text{
    color: #11101d;
    font-size: 35px;
}

.home-section .home-content .bx-menu{
    margin: 0 15px;
}

.home-section .home-content .text{
    font-size: 26px;
    font-weight:600;
}


@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidebar ">
        <div class="logo-details">
        <i class='bx bxs-tree-alt'></i>
        <span class="logo_name">KASETSART</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class='bx bx-file-blank' ></i>
                <span class="link_name">ยื่นคำร้องฝึกงาน</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">ยื่นคำร้องฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-check-square' ></i>
                    <span class="link_name">ตรวจสอบผลการอนุมัติ</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">ตรวจสอบผลการอนุมัติ</a></li>
                <li><a href="#">ผลการอนุมัติ</a></li>
                <li><a href="#">ผลการฝึกงาน</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-download'></i>
            <span class="link_name">download</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">download</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-upload'></i>
            <span class="link_name">upload</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">upload</a></li>
            </ul>
    </ul>
</div>

<section class="home-section">
 <div class="home-content">
 <i class='bx bx-menu'></i>
 <span class="text">ระบบบริหารจัดการการฝึกงานแบบออนไลน์</span>
 </div>
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
