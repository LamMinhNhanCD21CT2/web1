<div class="row no-gutters col-md-12 p-3">
  <h1>HÀNG TỒN KHO</h1>
</div>
<div class="row no-gutters col-md-12">
  <table class="table" border="2px">
    <thead>
      <tr class="table-primary text-dark">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Đơn giá</th>
        <th>Hình</th>
        <th>Nhóm</th>
        <th>Mã loại</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Số lượng tồn</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new hanghoa();
      $reuslt = $hh->getHangHoaAll();
      while ($set = $reuslt->fetch()) :
      ?>
        <tr>
          <td><?php echo $set['mahh']; ?> </td>
          <td><?php echo $set['tenhh']; ?></td>
          <td><?php echo $set['dongia']; ?> .VNĐ</td>
          <td><img width="50px" height="50px" src="Content/imagetourdien/<?php echo $set['hinh']; ?>" /></td>
          <td><?php echo $set['Nhom']; ?></td>
          <td><?php echo $set['maloai']; ?></td>
          <td><?php echo $set['ngaylap']; ?></td>
          <td><?php echo $set['mota']; ?></td>
          <td><?php echo $set['soluongton']; ?></td>
        </tr>
      <?php
      endwhile
      ?>
    </tbody>
  </table>
</div>