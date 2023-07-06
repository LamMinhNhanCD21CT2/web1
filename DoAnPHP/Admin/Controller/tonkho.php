<?php
//tạo được giở hàng cho khách hàng
// kiểm tra khi nào tạo? khi giỏ hàng chưa có

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$act = "tonkho";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'tonkho':
        include "./View/tonkho.php";
        break;
    case 'insert':
        include "./View/edithanghoa.php";
        break;

        case 'delete_action':
            $mahh=$_GET['id'];
            $hanghoa = new hanghoa();
            $hanghoa->deleteProd($mahh);
            echo '<script> alert ("Xóa sản phẩm thành công") </script>';
            include './View/hanghoa.php';
        
        break;

    case 'edit':
        include "./View/edithanghoa.php";
        break;
        
    case 'edit_action':
        $mahh = $_GET['id'];
        $tenhh = $_POST['tenhh'];
        $dongia = $_POST['dongia'];
        $giamgia = $_POST['giamgia'];
        $hinh = $_FILES['image']['name'];
        $Nhom = $_POST['nhom'];
        $maloai = $_POST['maloai'];
        $dacbiet = $_POST['dacbiet'];
        $soluotxem = $_POST['soluotxem'];
        $ngaylap = $_POST['ngaylap'];
        $mota = $_POST['mota'];
        $soluongton = $_POST['soluongton'];
        $mausac = $_POST['mausac'];
        $size = $_POST['size'];
        $hh = new hanghoa();
        $hh->updatesp($mahh, $tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton, $mausac, $size);
        echo '<script> alert ("Cập nhật thành công") </script>';
        include "./View/tonkho.php";
        break;


        case 'addProd_action':
            if(isset($_POST['mahh'])) {
                $mahh= $_POST['mahh'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['dongia'];
                $giamgia = $_POST['giamgia'];
                $hinh = $_FILES['image']['name'];
                $Nhom=$_POST['nhom'];
                $maloai=$_POST['maloai'];
                $dacbiet = $_POST['dacbiet'];
                $soluotxem=$_POST['soluotxem'];
                $ngaylap = $_POST['ngaylap'];
                $mota = $_POST['mota'];
                $soluongton = $_POST['soluongton'];
                $mausac = $_POST['mausac'];
                $size = $_POST['size'];
                $hh = new hanghoa();
                $hh->createProd($mahh,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac,$size);
                echo '<script> alert ("Thêm sản phẩm thành công") </script>';
                include './View/tonkho.php';
            }
            break;
}
