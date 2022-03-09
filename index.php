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
    <body>
        <?php echo "controller = ".$controller." ,action = ".$action ;?>
        <br>
        [<a href= "?controller=pages&action=home">Home</a>]
        [<a href= "?controller=petitionDC&action=index">ยื่นคำร้องฝึกงานสำหรับอาจารย์</a>]
        [<a href= "?controller=petitionC&action=indexC">ยื่นคำร้องสหกิจสำหรับอาจารย์</a>]
        [<a href= "?controller=petitionDCUser&action=index">ยื่นคำร้องฝึกงานสำหรับนิสิต</a>]
        [<a href= "?controller=company&action=index">companyฝึกงาน</a>]
        [<a href= "?controller=cooperative&action=index">companyสหกิจ</a>]
        [<a href= "?controller=hamburger&action=index">hamburgerนิสิต</a>]
        [<a href= "?controller=hamburgerAj&action=index">hamburgerอาจารย์</a>]
        <?php require_once("routes.php");?>
    
</body>
</html>