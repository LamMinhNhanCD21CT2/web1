<?php
    $act='dangnhap';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch($act){
        case 'dangnhap':
            include "./View/login.php";
            break; 
        case 'dangnhap_action':
            //truyền qa user và pass
            if(isset($_POST['txtusername'])&& isset($_POST['txtpassword']))
            {
              
                $user=$_POST['txtusername'];
                $pass=md5($_POST['txtpassword']);
                //so sánh trong database có thì tức là đã dc đăng ký
                $us = new user();
                $ur = $us->loginUser($user,$pass);

                if($ur!=false)
                {
                    $_SESSION['makh']=$ur['makh'];
                    $_SESSION['tenkh']=$ur['tenkh'];
                    $_SESSION['username']=$ur['username'];
                    //đăng nhập thành công quay về trang chủ 
                    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
                }
                else
                {
                    echo '<script> alert("đăng nhập không thành công");</script>';
                    include "./View/registration.php";
                }
            }
            break;
            case'logout':
                if(isset($_SESSION['makh']))
                {
                    unset($_SESSION['makh']);
                    unset($_SESSION['tenkh']);
                    unset($_SESSION['username']);
                    unset($_SESSION['cart']);
                    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
                }
                break;
        }
?>