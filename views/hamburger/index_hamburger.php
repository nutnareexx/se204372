<!--<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Drop Down Sidebar Menu | CodingLab </title>
        <link rel ="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>

    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Prompt', sans-serif;

    .sidebar {
        /*position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 260px;
        background: #000;*/
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: black;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .sidebar .logo-details{
        height: 60px;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .sidebar .logo-details i{
        font-size: 30px;
        color: #fff;
    }

    .sidebar .logo-details .logo_name{
        
        font-size: 22px;
        color: #000;
        font-weight: 600;
        
    }

    .sidebar .nav-links{
        background: red;
        height: 100%;
        padding-top:30px;

    }

    .sidebar .nav-links li{
        position: relative;
        list-style: none;
        font-family: 'Prompt', sans-serif;
    }

    .sidebar .nav-links li i{
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-family: 'Prompt', sans-serif;
    }

    .sidebar .nav-links li a{
        text-decoration: none;
    }

    .sidebar .nav-links li a .link_name{
        font-size: 18px;
        font-weight: 400;
        color: #fff;
    }


    </style>    


<body>
    <div class="sidebar">
        <div class="logo-details">
        <i class='bx bxs-tree-alt'></i>
        <span class="logo_name">KASETSART</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
            <i class='bx bx-file-blank'></i>
            <span class="link_name">ยื่นคำร้องฝึกงาน</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-check-square'></i>
            <span class="link_name">ตรวจสอบผลการอนุมัติ</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-download'></i>
            <span class="link_name">download</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-upload'></i>
            <span class="link_name">upload</span>
            </a>
    </ul>
</div>


</body>
</html>

--><!DOCTYPE html>
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
  height: 100%;
  width: 360px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
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
    font-size: 30px;
    color: #fff;
}

.sidebar .logo-details .logo_name{
      
    font-size: 22px;
    color: #fff;
    font-weight: 600;
        
}

.sidebar .nav-links{
        /*background: red;*/
    height: 100%;
    padding-top:30px;

}

.sidebar .nav-links li{
    position: relative;
    list-style: none;
    font-family: 'Prompt', sans-serif;
}

.sidebar .nav-links li i{
    height: 50px;
    min-width: 50px;
    line-height: 50px;
    color: #fff;
    font-size: 30px;

}

.sidebar .nav-links li a{
    text-decoration: none;
}

.sidebar .nav-links li a .link_name:hover{
    color: red;
}

.sidebar .nav-links li a .link_name{
    font-size: 18px;
    font-weight: 400;
    color: #fff;
}


@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidebar">
        <div class="logo-details">
        <i class='bx bxs-tree-alt'></i>
        <span class="logo_name">KASETSART</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
            <i class='bx bx-file-blank'></i>
            <span class="link_name">ยื่นคำร้องฝึกงาน</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-check-square'></i>
            <span class="link_name">ตรวจสอบผลการอนุมัติ</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-download'></i>
            <span class="link_name">download</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-upload'></i>
            <span class="link_name">upload</span>
            </a>
    </ul>
</div>


</body>
</html> 
