<?php
// include "Model/connect.php";
// include "Model/hanghoa.php";
// include "Model/loaisanpham.php";
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <!-- link đăng nhập -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- link font awnsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- link style bootstrap cdn link -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- link style của trang web -->
    <link rel="stylesheet" type="text/css" href="/assets/CSS/web.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- Title của trang web -->
    <title>Freedman</title>
    <link rel="icon" href="https://images.hdqwalls.com/download/naruto-logo-anime-8k-qz-1680x1050.jpg" type="image/x-icon">
</head>
<style>
   
</style>
<body>
<!-- Thanh header tao menu -->
<?php
    if(!isset($_SESSION['admin']))
    {
        include "View/headder.php";
    }
        
    ?>
        <!-- end hinh dong -->
        <!-- phan thân -->
        <div class="container-fluid bg-dark text-white">
        <?php
             //load controler
            $ctrl="dangnhap";
            if(isset($_GET['action']))
                $ctrl=$_GET['action'];
            include 'Controller/'.$ctrl.'.php';
            // include 'Controller/'.$ctrl.'.php';

        //end controller
            
        ?>
        <!-- end menu right -->
    </div>
    <!-- footer -->
    <?php
    if(!isset($_SESSION['admin']))
    {
        include "View/footer.php";
    }
        
    ?>
    <!-- end footer -->
   
</body>

</html>