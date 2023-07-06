<?php
$act="sanpham";
//controller điều phối đến các view khác nhau
if(isset($_GET["act"]))
{
    $act=$_GET["act"];
}
switch($act){
    case "sanpham":
        include "./View/sanpham.php";
        break;
    case "khuyenmai":
        include "./View/khuyenmai.php";
        break;
    case "detail":
        include "./View/sanphamchitiet.php";
        break;
    case "timkiem":
        include "./View/sanpham.php";
        break;
    case"comment":
        if (!isset($_SESSION['makh'])){
            echo '<script>alert("Bạn chưa đăng nhập");
             window.location.href = "index.php?action=dangnhap";</script>';
            exit();
        }
        elseif(isset($_GET['id']))
        {
            $mahh=$_GET['id'];
            $makh=$_SESSION['makh'];
            $noidung=$_POST['comment'];
            $usr=new user();
            $usr->insertcomment($mahh, $makh , $noidung);
        }
        include"./View/sanphamchitiet.php";
        break;                    
}
?>