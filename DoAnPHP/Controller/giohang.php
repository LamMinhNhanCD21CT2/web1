<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = "giohang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        if (isset($_POST["mahh"])) {
            $mahh = $_POST["mahh"];
            $soluong = $_POST["soluong"];
            $gh = new giohang();
            $gh->add_items($mahh, $soluong);
        }
        include "./View/cart.php";
        break;
    case 'delete_item':
        if (isset($_GET['id'])) {
            $key = $_GET['id'];
            $gh = new giohang();
            $gh->delete_items($key);
        }
        include "./View/cart.php";
        break;
    case 'update_item':
        if (isset($_POST["newqty"])) {
            $newQuantities = $_POST["newqty"];
            $gh = new giohang();
            foreach ($_SESSION['cart'] as $key => $item) {
                $newQuantity = $newQuantities[$key];
                $gh->update_items($key, $newQuantity);
            }
        }
        include "./View/cart.php";
        break;
        case 'order':
            $gh = new giohang();
            // Code để cập nhật số lượng hàng trong cơ sở dữ liệu
            foreach ($_SESSION['cart'] as $key => $item) {
                $productId = $item['mahh'];
                $newQuantity = $item['soluong'];
                $gh->updateItemQuantity($productId, $newQuantity);
            }
        
            $hd = new hoadon();
            $sohd = $hd->InsertOrder($_SESSION['makh']);
        
            $_SESSION['masohd'] = $sohd;
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $mausac = isset($item['mausac']) ? $item['mausac'] : '';
                $size = isset($item['size']) ? $item['size'] : '';
                $hd->inserOrderDetail($sohd, $item['mahh'], $item['soluong'], $item['total']);
                $total += $item['total'];
            }
            $hd->updateOrderTotal($sohd, $total);
        
            include "./View/order.php";
            $gh->clear_cart(); // Di chuyển hàm xóa giỏ hàng xuống sau khi hiển thị hóa đơn
            break;
        
}
?>
