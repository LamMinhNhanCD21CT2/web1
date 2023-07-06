<?php 
     $act = "category";
     if(isset($_GET['act'])) {
        $act = $_GET['act'];
     }
     switch($act) {
         case 'category':
            include './View/category.php';
            break;
        case 'categoryEdit':
            include './View/editCategory.php';
            break;
        case 'themCategory':
            include './View/editCategory.php';
            break;
        case 'editCategory_action':
            if(isset($_GET['maloai'])) {
                $maloai=$_GET['maloai'];
                $tenloai = $_POST['tenloai'];
                $idmaloai = $_POST['idmaloai'];
                $loai = new loai();
                $loai->updateCategory($maloai,$tenloai,$idmaloai);
                echo '<script> alert ("Cập nhật thành công") </script>';
                include './View/category.php';
            }
            break;
        case 'categoryDelete_action':
            if(isset($_GET['maloai'])) {
                $maloai=$_GET['maloai'];
                $loai = new loai();
                $loai->deleteCategory($maloai);
                echo '<script> alert ("Xóa loại hàng thành công") </script>';
                include './View/category.php';
            }
            break;
        case 'addCategory_action':
            if(isset($_POST['maloai'])) {
                $maloai= $_POST['maloai'];
                $tenloai = $_POST['tenloai'];
                $idmaloai = $_POST['idmaloai'];
                $loai = new loai();
                $loai->createCategory($maloai,$tenloai,$idmaloai);
                echo '<script> alert ("Thêm loại hàng thành công") </script>';
                include './View/category.php';
            }
            break;
    }
?>