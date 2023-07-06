<?php
$act = 'dangnhap';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include './View/dangnhap.php';
        break;
        
    case 'dangnhap_action':
        var_dump($_SESSION['admin']);
        // Gửi thông tin đăng nhập admin lên db
        if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];

            // controller yêu cầu model kiểm tra thông tin đăng nhập 
            $ur = new dangnhap();
            $test = $ur->loginAdmin($user, $pass);
            // $test[makh=>16, tenkh=>..., username=...]
            if ($test) {
                $_SESSION['admin'] = $test['user'];
                echo '<script> alert("Đăng nhập thành công") </script>';
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=hanghoa"/>';
            } else {
                echo '<script> alert("Tên đăng nhập hoặc mật khẩu sai") </script>';
                include "./View/dangnhap.php";
            }
        }
        break;
    case 'logout':
        if (isset($_SESSION['makh'])) {
            unset($_SESSION['makh']);
            unset($_SESSION['tenkh']);
            unset($_SESSION['username']);
            unset($_SESSION['cart']);
        }
        echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=hanghoa"/>';
        break;
}
