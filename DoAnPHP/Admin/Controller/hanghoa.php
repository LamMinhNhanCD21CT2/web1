<?php
//tạo được giở hàng cho khách hàng
// kiểm tra khi nào tạo? khi giỏ hàng chưa có

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$act = "hanghoa";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'hanghoa':
        include "./View/hanghoa.php";
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
        if($check!==false){
            uploadimage();
            echo '<script> alert ("Cập nhật thành công") </script>';
            include "./View/hanghoa.php";
        }
        else{
            echo '<script> alert ("Cập nhật khong thành công") </script>';
            include "./View/edithanghoa.php";
        }
       
        break;

        case 'themsp_action':
            $tenhh = $_POST['tenhh'];
            $dongia = $_POST['dongia'];
            $giamgia = $_POST['giamgia'];
            $hinh = $_FILES['image']['name'];
            $Nhom = $_POST['nhom'];
            $maloai = $_POST['maloai'];
            $dacbiet = $_POST['dacbiet'];
            $soluotxem = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];
            $soluongton = $_POST['slt'];
            $mausac = $_POST['mausac'];
            $size = $_POST['size'];
            $hh = new hanghoa();
            $checkinsert=$hh->insertsp($tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai,$dacbiet, $soluotxem, $ngaylap, $mota, $soluongton, $mausac, $size);
            if($checkinsert!==false)
            {
                uploadimage();
                echo '<script> alert ("insert thành công") </script>';
                include "./View/hanghoa.php";
            }
            else
            {
                echo '<script> alert ("Cập nhật khong thành công") </script>';
                include "./View/edithanghoa.php";
            }
           
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
                include './View/hanghoa.php';
            }
            break;
}
