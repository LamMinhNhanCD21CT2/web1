<?php
    $act='dangky';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch($act){
        case 'dangky':
            include "./View/registration.php";
            break; 
        case 'dangky_action':
            //chuyển những thông tin như tên khách hàng , số điện thoại , email, user
            if(isset($_POST['txttenkh']))
            {
                $tenkh = $_POST['txttenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsodt'];
                $username = $_POST['txtusername'];
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpass'];

                $crypt = md5($pass);
                //trước khi insert vào kiểm tra usernmae đó đã tồn tại trong database chưa
                //constroller yêu cầu model viêt phương thức thêm vào database
                $us = new user();
                $check=$us->InsertUser($tenkh , $username, $crypt , $email, $diachi , $sodt);
                if($check!= 'false')    
                {
                    echo '<script> alert("dang ky thanh con");</script>';
                    include "./View/home.php";
                }
                else
                {
                    echo '<script> alert("dang ky khong thanh con");</script>';
                    include "./View/registration.php";
                }
                }
                break;
            }
    
?>