<!DOCTYPE html>
<html>
    <head>
            <!-- <link rel ="stylesheet" href="hamburger.css"> -->
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
            /* font-family: 'Prompt', sans-serif; */
            /* border-collapse: collapse; */
            font-size: 18px;
            font-weight: bold;
            width: 80%;
        }

        .card {
            font-family: 'Prompt', sans-serif;
            width: 80%;
            background-color: #f1f1f1;
            padding: 20px 20px 20px 20px;
            margin: 20px 20px 20px 20px;
            border-radius: 50px;
            
        }
        th, td {
            padding: 5px 5px 5px 5px;
        }

        tr{
            padding: 10px 10px 10px 10px;
        }

        button {
            font-family: 'Prompt', sans-serif;
            position: relative;
            background-color: #397d54 ; 
            border: 1px black;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            cursor: pointer;
            width: 30%;
            border-radius: 50px;
        }
        button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }
        button:hover {
            background-color: #73c088;
            color: white;
        }

        input[type=text], select {
                font-family: 'Prompt', sans-serif;
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 50px;
                box-sizing: border-box;
            }

        input[type=date], select {
                font-family: 'Prompt', sans-serif;
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 50px;
                box-sizing: border-box;
            
            }
        input[type=mail], select {
                font-family: 'Prompt', sans-serif;
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 50px;
                box-sizing: border-box;
            
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
            <a href="?controller=nisit&action=index">
            <i class='bx bx-home'></i>
                <span class="link_name">หน้าแรก</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=nisit&action=index">หน้าแรก</a></li>
            </ul>
        </li>
        
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
                        <span class="link_name">สถานประกอบการ</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">สถานประกอบการ</a></li>
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
                
                    <a href="?controller=user&action=logoutNisit">          
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
    
        <h2><b>ยื่นคำร้องฝึกงาน <br></h2>

        </div>

        <center>
        <div class="card">
        <form method="get" action="">
            <table align="center">
                <tr>
                    <td align="right" style="width: 30%;" ><label>วันที่เขียนคำร้อง :</label></td>
                    <td> <input type="date" name="date"/></td>
                </tr>
                

                <tr>
                    <td align="right"><label>รหัสนิสิต :</label></td>
                    <td><?php echo $userList->user_id;?></td>
                    <!-- <td> <input type="text" name="user_id"/></td> -->
                </tr>
                
                <tr>
                    <td align="right"><label>คำนำหน้า : </label></td>
                    <td><?php echo $userList->user_title?></td>
                    <!-- <td><select name="name_id">
                        <option value="">--เลือก--</option>
                        <?php foreach($nametitleList as $newtt){
                            echo "<option value=$newtt->name_id>$newtt->name_title</option>";
                        }?>
                        </select>
                    </td> -->
                </tr>

                <tr>
                    <td align="right"><label>ชื่อ : </label></td>
                    <td><?php echo $userList->user_name?></td>
                    <!-- <td><input type="text" name="user_name"/></td> -->
                </tr>
                <tr>
                    <td align="right"><label>นามสกุล : </label></td>
                    <td><?php echo $userList->user_surname?></td>
                    <!-- <td><input type="text" name="user_surname"/></td> -->
                </tr>

                <tr>
                    <td align="right"> <label>เบอร์โทรศัพท์ : </td>
                    <td><input type="text" name="phone"/></label></td>
                </tr>
            
                <tr>
                    <td align="right"> <label>Facebook : </td>
                    <td><input type="text" name="facebook"/></td>
                </tr>

                <tr>
                    <td align="right"><label>ตำแน่งที่ไปฝึกงาน : </label></td>
                    <td><input type="text" name="dc_position"/></td>
                </tr>

                <tr>
                    <td align="right"> <label> สถานประกอบการ : </label></td>
                    <td> 
                        <input type="radio" id="old" name="company" value="old">
                        <label for="old"> สถานประกอบการที่ภาควิชามีอยู่ </label><br>
                        <input type="radio" id="new" name="company" value="new">
                        <label for="new"> สถานประกอบการใหม่ </label><br>
                        
                    </td>
                </tr>
            </table>
            <br>

            <input type="hidden" name="controller" value="petitionDCUser"/>
            <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
            <button type="submit" name="action" value="index"> BACK </button>
            <button type="submit" name="action" value="index2"> NEXT </button>
        </form>
        </div>
        </center>
        <br>
        <br>

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