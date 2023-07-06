<?php
$act = "cthoadon";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'cthoadon':
        include "./View/cthoadon.php";
        break;
    case 'cthoadonedit':
        include './View/editcthoadon.php';
        break;
    case 'editcthoadon_action':
        if(isset($_GET['mahh'])) {
        
            $mahh = $_POST['mahh'];
            $soluongmua = $_POST['soluongmua'];
            $mausac = $_POST['mausac'];
            $size = $_POST['size'];
            $thanhtien = $_POST['thanhtien'];
            $tinhtrang = $_POST['tinhtrang'];

            $cthd = new cthoadon();
            $cthd->updatecthoadon($mahh,$soluongmua, $mausac,$size,$thanhtien,$tinhtrang);
            echo '<script> alert ("Cập nhật chi tiết hóa đơn thành công") </script>';
            include './View/cthoadon.php';
        }
        break;
    case 'cthoadondelete_action':
        if(isset($_GET['mahh'])) {
            $mahh=$_GET['mahh'];
            $cthd = new cthoadon();
            $cthd->deletecthoadon($masohd);
            echo '<script> alert ("Xóa chi tiết hóa đơn hàng thành công") </script>';
            include './View/cthoadon.php';
        }
        break;
    }
?>
