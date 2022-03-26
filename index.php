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
        
        <?php require_once("routes.php");?>
    
</body>
</html>