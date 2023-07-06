<?php 
     $act = "customer";
     if(isset($_GET['act'])) {
        $act = $_GET['act'];
     }
     switch($act) {
         case 'customer':
            include './View/customer.php';
            break;
        case 'customeredit':
            include './View/editcustomer.php';
            break;
        case 'editcustomer_action':
            if(isset($_GET['makh'])) {
                $makh=$_GET['makh'];
                $tenkh = $_POST['tenkh'];
                $user = $_POST['username'];
                $matkhau = $_POST['matkhau'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $dt = $_POST['sodienthoai'];
                $vaitro = $_POST['vaitro'];

                
                $kh = new customer();
                $kh->updatecustomer($makh, $tenkh, $user, $matkhau, $email, $diachi, $dt,$vaitro);
                echo '<script> alert ("Cập nhật thông tin khách hàng thành công") </script>';
                include './View/customer.php';
            }
            break;
        case 'customerdelete_action':
            if(isset($_GET['makh'])) {
                $makh=$_GET['makh'];
                $kh = new customer();
                $kh->deletecustomer($makh);
                echo '<script> alert ("Xóa hóa thông tin khách hàng thành công") </script>';
                include './View/customer.php';
            }
            break;
    }
?>