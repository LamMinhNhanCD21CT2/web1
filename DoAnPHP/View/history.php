<?php
  // Gọi hàm getOrderHistory để lấy danh sách hóa đơn của khách hàng
  $hoadon = new HoaDon();
  $makh = $_SESSION['makh'];
  // $orders = $hoadon->getOrderHistory($makh);
  $rows = $hoadon->getOrderHistory($makh);

  // Kiểm tra nếu có hóa đơn
  if (!empty($rows)) {
    foreach ($rows as $rows) {
      $sohd = $rows['masohd'];
      $tenkh = $rows['tenkh'];
      $diachi = $rows['diachi'];
      $sodt = $rows['sodienthoai'];
      $ngaydat = $rows['ngaydat'];

      // Hiển thị thông tin hóa đơn
      echo "<h3>Mã hóa đơn: $sohd</h3>";
      echo "<p>Khách hàng: $tenkh</p>";
      echo "<p>Địa chỉ: $diachi</p>";
      echo "<p>Số điện thoại: $sodt</p>";
      echo "<p>Ngày đặt: $ngaydat</p>";

      // Lấy chi tiết hóa đơn
      $orderDetails = $hoadon->getOrderDetail($sohd);

      // Hiển thị thông tin chi tiết hóa đơn
      echo "<table>";
      echo "<tr><th>Hình ảnh</th><th>Tên hàng</th><th>Số lượng</th><th>Giá tiền</th></tr>";
      foreach ($orderDetails as $detail) {
        $tenhh = $detail['tenhh'];
        $soluong = $detail['soluongmua'];
        $thanhtien = $detail['thanhtien'];

        // Lấy thông tin sản phẩm từ CSDL hoặc bất kỳ nguồn dữ liệu nào khác
        $hinh = ['hinh']; // Thay đổi đường dẫn hình ảnh sản phẩm tương ứng
        // $hinh = $detail['hinhanh']; // Nếu có trường hình ảnh trong bảng hanghoa

        echo "<tr>";
        echo "<td><img src=\"$hinh\" alt=\"$tenhh\" width=\"50\" height=\"50\"></td>";
        echo "<td>$tenhh</td>";
        echo "<td>$soluong</td>";
        echo "<td>$thanhtien</td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "<hr>";
    }
  } else {
    echo "<p>Không có hóa đơn nào.</p>";
  }
?>
