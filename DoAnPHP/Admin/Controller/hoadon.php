<?php 
     $act = "hoadon";
     if(isset($_GET['act'])) {
        $act = $_GET['act'];
     }
     switch($act) {
         case 'hoadon':
            include './View/hoadon.php';
            break;
        case 'hoadonedit':
            include './View/edithoadon.php';
            break;
        case 'edithoadon_action':
            if(isset($_GET['masohd'])) {
                $masohd=$_GET['masohd'];
                $makh = $_POST['makh'];
                $ngaydat = $_POST['ngaydat'];
                $tongtien = $_POST['tongtien'];
                $hd = new hoadon();
                $hd->updatehoadon($masohd,$makh,$ngaydat, $tongtien);
                echo '<script> alert ("Cập nhật hóa đơn thành công") </script>';
                include './View/hoadon.php';
            }
            break;
        case 'hoadondelete_action':
            if(isset($_GET['masohd'])) {
                $masohd=$_GET['masohd'];
                $hd = new hoadon();
                $hd->deletehoadon($masohd);
                echo '<script> alert ("Xóa hóa đơn hàng thành công") </script>';
                include './View/hoadon.php';
            }
            break;
    }
?>