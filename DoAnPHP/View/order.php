<?php
  if (!isset($_SESSION['makh']) || count($_SESSION['cart']) == 0) {
    echo '<script> alert ("Bạn chưa đăng nhập ");</script>';
    include "login.php";
  } else {
    echo '<div class="table-responsive">';
    echo '<form action="" method="post">';
    echo '<table class="table table-bordered  text-light" border="0">';
    
    $hd = new HoaDon();
    $result = $hd->getOrder($_SESSION['masohd']);
    $sohd = $result['masohd'];
    $tenkh = $result['tenkh'];
    $diachi = $result['diachi'];
    $sodt = $result['sodienthoai'];
    $ngaydat = $result['ngaydat'];
    $d = new DateTime($ngaydat);
    
    echo '<tr><td colspan="4"><h2 style="color: red;">HÓA ĐƠN</h2></td></tr>';
    echo '<tr><td colspan="2">Số Hóa đơn: ' . $sohd . '</td>';
    echo '<td colspan="2"> Ngày lập: ' . $d->format('d/m/Y') . '</td></tr>';
    echo '<tr><td colspan="2">Họ và tên:</td><td colspan="2">' . $tenkh . '</td></tr>';
    echo '<tr><td colspan="2">Địa chỉ:</td><td colspan="2">' . $diachi . '</td></tr>';
    echo '<tr><td colspan="2">Số điện thoại:</td><td colspan="2">' . $sodt . '</td></tr>';
    
    echo '</table>';
    
    // Thông tin sản phẩm
    echo '<table class="table table-bordered text-light">';
    echo '<thead>';
    echo '<tr class="table-success text-dark">';
    echo '<th>Số TT</th>';
    echo '<th>Thông Tin Sản Phẩm</th>';
    echo '<th>Tùy Chọn Của Bạn</th>';
    echo '<th>Giá</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    $j = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
      $j++;
      echo '<tr>';
      echo '<td>' . $j . '</td>';
      echo '<td><img width="50px" height="50px" src="assets\img\\' . $item['hinh'] . '"></td>';
      echo '<td>' . $item['ten'] . '</td>';
      echo '<td>Đơn Giá: ' . number_format($item['dongia']) . ' - Số Lượng: ' . $item['soluong'] . '<br /></td>';
      echo '</tr>';
    }
    
    echo '<tr>';
    echo '<td colspan="3"><b>Tổng Tiền</b></td>';
    echo '<td><b>' . $gh->getTotal() . '<sup><u>đ</u></sup></b></td>';
    echo '</tr>';
    
    echo '</tbody>';
    echo '</table>';
    
    echo '</form>';
    echo '</div>';
    echo '</div>';
  }
?>
