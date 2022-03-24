<!DOCTYPE html>
<html>
    <head>
            <!-- <link rel ="stylesheet" href="hamburger.css"> -->
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
            font-size: 32px;
            font-weight: bold;
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
            background-color: #f1f1f1;
            width:80%;
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
        input[type=email], select {
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
            <i class='bx bx-buildings'></i>
            <span class="logo_name">KASETSART UNIVERSITY</span>
        </div>
    <dl class="nav-links">
    <li>
            <a href="?controller=nisit&action=index&userid=<?php echo $userid;?>">
            <i class='bx bx-home'></i>
                <span class="link_name">หน้าแรก</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=nisit&action=index&userid=<?php echo $userid;?>">หน้าแรก</a></li>
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
                <li><a href="?controller=companyP&action=indexP&userid=<?php echo $userid;?>">ฝึกงาน</a></li>
                <li><a href="?controller=cooperativeP&action=index&userid=<?php echo $userid;?>">สหกิจ</a></li>
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
                <li><a href="?controller=petitionDC&action=index&userid=<?php echo $userid;?>">ฝึกงาน</a></li>
                <li><a href="?controller=petitionC&action=indexC&userid=<?php echo $userid;?>">สหกิจ</a></li>
            </ul>
        </li>
        
        
        <li>
            <a href="?controller=uploadAj&action=index&userid=<?php echo $userid;?>">
                <i class='bx bx-upload'></i>
                <span class="link_name">อัพโหลดประกาศ</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?controller=uploadAj&action=index&userid=<?php echo $userid;?>">อัพโหลดประกาศ</a></li>
            </ul>
        </li>
        <li> 
    <div class="profile-details">
        <div class="profile-content">
            <i class='bx bxs-user'></i>
        </div>
            
            <div class="name-job">
                <div class="profile_name">
                <?php echo $userList->user_name;?> <?php echo $userList->user_surname;?>
                </div>
            </div>   
            <a href="?controller=user&action=logoutAj&userid=<?php echo $userid;?>">          
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
 <div class="header">
     
     รายละเอียดเอกสารยื่นคำร้องสหกิจ
 </div>
 
 <center>
     <div class="card" align='center'>
        <form method="get" action="">
            <table align="center">
            <th colspan="2"> 
                <br>
                <label>ส่วนของนิสิต</label>
            </th>
                <tr>
                    <th align="right" style="width: 40%;">รหัสนิสิต :</th>
                    <td><?php echo "$petionCList->user_id";?></td>
                </tr>
                <tr>
                    <th align="right">ชื่อ-นามสกุล :</th>
                    <td><?php echo "$petionCList->name_title$petionCList->user_name $petionCList->user_surname";?></td>
                </tr>
                <tr>
                    <th align="right">เบอร์โทรศัพท์มือถือ :</th>
                    <td><?php echo "$petionCList->phone_p";?></td>
                </tr>
                <tr>
                    <th align="right">ชื่อ-Facebook :</th>
                    <td><?php echo "$petionCList->FB_p";?></td>
                </tr>
                <tr>
                    <th align="right">วันที่ยื่นใบคำร้อง :</th>
                    <td><?php echo "$petionCList->date_p";?></td>
                </tr>
                <tr>
                    <th align="right">ปีการศึกษา :</th>
                    <td><?php echo "$petionCList->academicY_p";?></td>
                </tr>
                <tr>
                    <th align="right">ตำแหน่งที่ไปฝึกงาน :</th>
                    <td><?php echo "$petionCList->position_p";?></td>
                </tr>
                <th colspan="2"> 
                    <br>
                    <label>ส่วนของผู้ที่จะให้ภาควิชาฯ ออกหนังสือขอความอนุเคราะห์ฝึกงาน</label>
                </th>
                <tr>
                    <th align="right">ชื่อ - นามสกุล :</th>
                    <td><?php echo "$petionCList->approverName_p $petionCList->approverSname_p";?></td>
                </tr>
                <tr>
                    <th align="right">ตำแหน่ง :</th>
                    <td><?php echo "$petionCList->approverP_p";?></td>
                </tr>
                <th colspan="2">
                <br><br>
                <label>ส่วนของสถานประกอบการ</label> 
                
                </th>
                <tr>
                    <th align="right">ชื่อสถานประกอบการสหกิจ :</th>
                    <td><?php echo "$petionCList->c_name";?></td>
                </tr>
                <tr>
                    <th align="right">สถานที่ตั้งเลขที่ :</th>
                    <td><?php echo "$petionCList->compNo_p";?></td>
                </tr>
                <tr>
                    <th align="right">ถนน :</th>
                    <td><?php echo "$petionCList->compRoad_p";?></td>
                </tr>
                <tr>
                    <th align="right">ตำบล/แขวง :</th>
                    <td><?php echo "$petionCList->compSubdist_p";?></td>
                </tr>
                <tr>
                    <th align="right">อำเภอ/เขต :</th>
                    <td><?php echo "$petionCList->compDistrict_p";?></td>
                </tr>
                <tr>
                    <th align="right">จังหวัด :</th>
                    <td><?php echo "$petionCList->compProvince_p";?></td>
                </tr>
                <tr>
                    <th align="right">รหัสไปรษณีย์ :</th>
                    <td><?php echo "$petionCList->compPost_p";?></td>
                </tr>
                <th colspan="2">
                <br><br>
                <label>ส่วนของผู้ประสานงาน</label> 
                
            </th>
                <tr>
                    <th align="right">ชื่อผู้ประสานงาน :</th>
                    <td><?php echo "$petionCList->hrName_p $petionCList->hrSname_p";?></td>
                </tr>
                <tr>
                    <th align="right">โทร :</th>
                    <td><?php echo "$petionCList->hrPhone_p";?></td>
                </tr>
                <tr>
                    <th align="right">E-mail :</th>
                    <td><?php echo "$petionCList->hrMail_p";?></td>
                </tr>
                <th colspan="2">
                <br><br>
                <label>ส่วนของรายละเอียดการฝึกงาน</label> 
                
            </th>
                <tr>
                    <th align="right">ค่าตอบแทน :</th>
                    <td><?php echo "$petionCList->salary_p";?></td>
                </tr>
                <tr>
                    <th align="right"><label>ที่พัก : </label></th>
                        <td><?php 
                            if($petionCList->room_p == "Have"){
                                echo "มีที่พัก";
                            }
                            else if($petionCList->room_p== "Don't Have"){
                                echo "ไม่มีที่พัก";
                            }
                        ?>
                        </td>
                </tr>

                <tr>
                    <th align="right">เริ่มฝึกงาน :</th>
                    <td><?php echo "$petionCList->start_p";?></td>
                </tr>
                <tr>
                    <th align="right">สิ้นสุดการฝึกงาน :</th>
                    <td><?php echo "$petionCList->finish_p";?></td>
                </tr>
                <th colspan="2">
                <br><br>
                <label>การอนุมัติการฝึกงาน</label> 
                
                </th>
                
                <tr>
                    <th align="right">ผลการอนุมัติ :</th>
                    <td><?php echo "$petionCList->status_name";?></td>
                </tr>

            </table>
            <br><br>
    <input type="hidden" name="controller" value="petitionC"/>
    <input type="hidden" name="petitionid" value="<?php echo $petionCList->petition_id;?>"/>
    <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
    <button type="submit" name="action" value="indexC"> กลับ </button>
 
</div>
</form>
 </center>
 <br><br>

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



<!--<image src="data:image/jpeg;base64,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X8BPlsMpDjKLP53foBr7hNS4NtOnTers66q6f/W/XauiJZDbUxlqi2a3NKHI16RY+b+6CfeJ2VkL13shcZaZFqhQC+bXQ63/AOEllw6jNZR0vO79ANfcLTpbZ1I2ug0AA4jQcBJLhsjbbadu69zS5qXTTe3QWRtSs1OrXa5NMZAw1OW6Czj1Hj67z5oLnFJWzMBRDBQ2Us1wL3uNQO0yZXDKM3RHSADd9hYX9066mApsqqUBCiyjsHCw7pXws99007dPvlfY9qrmmr6U6FnRhnL4fosQSrAM1r31AJI+2YtCsKIfMhVwmb+0Lhspt1nQ3I8ZMGguXJlGW1sttLdlpj09nUl4U11sf3TceBmpYJ3Fpq0qv/lN/NPttEsh6OIIoV0zkkLmDag9IdLv0a/iJ34uiVo1DkNM2UX5wufOHDXSS1bCo/nKDoRr2HUj6p1rs+kAQEFjxGutjecnwc9Om0/RcV3c66N9a2kuVuy2YOFqsayI/nIrhuw3yZWt3j67ztxVIVKuRicoTMAGK6k2vp2D7ZnmiuYPYZgCAeux6p8YnBJUtnUNbhfv4zu8EtDWz3vfquST59it07BD7QxWlJVq3yrnzemRoim3pa+E+8TjCKqVVJKc2GYDXosTrbtBt9cl6WHVSSqgEgA27F4D3XnFLCotiqgWFtOy97eq85/x8lt6l07dtPLm3ff29otEEWfmq5e+Y1EuAbEZshyA+o2na9N1BJDIhejZWfMR0wGN7mwPZeTBwqG/RHSIY95W1j9Q8J91qYYFWAIOhB4GT+G6e+9Uv/XPa69LptauthZE4tWapWVOOWlpmK36TEi44EjS8yNlOLumQoy2JUvnHSGhBvw0neuz6YUrkGU2JFuJHA37Z2YbCpTBCKBfjbr9Z650hgmsim66315tultfVW7V1VcqXsZERE9hkREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREA//2Q==">
-->

</body>

</html>

