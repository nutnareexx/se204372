<?php
if(isset($_GET['controller'])&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
    <head></head>
    <style>
        body{
            text-align: center;
        }
    </style>
    <body>
        <?php echo "controller = ".$controller." ,action = ".$action ;?>
        <br>
        [<a href= "?controller=pages&action=home">Home</a>]
        [<a href= "?controller=petitionDC&action=index">ยื่นคำร้องฝึกงานสำหรับอาจารย์</a>]
        [<a href= "?controller=petitionC&action=indexC">ยื่นคำร้องสหกิจสำหรับอาจารย์</a>]
        [<a href= "?controller=petitionDCUser&action=index">ยื่นคำร้องฝึกงานสำหรับนิสิต</a>]
        [<a href= "?controller=petitionCUser&action=index">ยื่นคำร้องสหกิจสำหรับนิสิต</a>]
        [<a href= "?controller=company&action=index">companyฝึกงาน</a>]
        [<a href= "?controller=cooperative&action=index">companyสหกิจ</a>]
        [<a href= "?controller=companyP&action=indexP">companyฝึกงานสำหรับอาจารย์</a>]
        [<a href= "?controller=hamburger&action=index">hamburgerนิสิต</a>]
        [<a href= "?controller=hamburgerAj&action=index">hamburgerอาจารย์</a>]
        [<a href= "?controller=checkApproval&action=index">ตรวจสอบผลการอนุมัติ</a>]
        [<a href= "?controller=download&action=index">downloadนิสิต</a>]
        [<a href= "?controller=upload&action=index">uploadนิสิต</a>]
        <?php require_once("routes.php");?>
    
</body>
</html>