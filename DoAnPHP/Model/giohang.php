<?php
class giohang
{
    function add_items($key, $quantity)
    {
        $prod = new hanghoa();
        $pros = $prod->getHangHoaId($key);
        $hinh = $pros["hinh"];
        $tenhh = $pros["tenhh"];
        $cost = $pros["dongia"];
        $total = $quantity * $cost;
        $item = array(
            'mahh' => $key,
            'hinh' => $hinh,
            'ten' => $tenhh,
            'dongia' => $cost,
            'soluong' => $quantity,
            'total' => $total
        );
        $_SESSION['cart'][] = $item;
    }

    function getTotal()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        return number_format($subtotal, 2);
    }

    function delete_items($key)
    {
        unset($_SESSION['cart'][$key]);
    }

    function update_items($key, $quantity)
    {
        if ($quantity <= 0) {
            $this->delete_items($key);
        } else {
            $_SESSION['cart'][$key]['soluong'] = $quantity;
            $_SESSION['cart'][$key]['total'] = $quantity * $_SESSION['cart'][$key]['dongia'];
        }
    }

    function updateItemQuantity($productId, $newQuantity)
    {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] === $productId) {
                $this->update_items($key, $newQuantity);
                break;
            }
        }
    }

    function deleteItem($productId)
    {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] === $productId) {
                $this->delete_items($key);
                break;
            }
        }
    }
    function clear_cart()
    {
        $_SESSION['cart'] = array(); // Xóa giỏ hàng trong session
    }
}
?>
