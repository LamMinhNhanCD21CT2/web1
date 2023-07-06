<?php
// Xóa sản phẩm khỏi giỏ hàng
    $hd= new hoadon();
    $sohd=$hd->InsertOrder($_SESSION['makh']);
    //có được mã số hóa đơn thì tiến hành insert vào chi tiết hóa đơn
    $_SESSION['masohd']=$sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        $mausac = isset($item['mausac']) ? $item['mausac'] : ''; // Kiểm tra và gán giá trị mặc định nếu không tồn tại
        $size = isset($item['size']) ? $item['size'] : ''; // Kiểm tra và gán giá trị mặc định nếu không tồn tại
    
        $hd->inserOrderDetail($sohd, $item['mahh'], $item['soluong'], $mausac, $size, $item['total']);
        $total += $item['total'];
    }
    //Viết phương thức update tổng tiền vào lại bảng hóa đơn
    $hd->updateOrderTotal($sohd,$total);
    include "View/order.php";
?>