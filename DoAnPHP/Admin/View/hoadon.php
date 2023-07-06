<style>
.box{
    padding: 20px 10px;
    max-width: 100%;
    margin: auto;
}
</style>

<div class="table-reponsive box">
    <h3 class="text-center" style="margin:150px 0px 30px 0px;"><b>DANH SÁCH HÓA ĐƠN</b></h3>
    <table id="example" class="table table-bordered">
        <thead>
        <tr>
                <th>Mã số hóa đơn</th>
                <th>Mã khách hàng</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $hd = new hoadon();
                $result = $hd->getHoaDonAll();
                while ($set = $result->fetch()) :
        ?>
            <tr>
                <td><?php echo $set['masohd']; ?> </td>
                <td><?php echo $set['makh']; ?></td>
                <td><?php echo $set['ngaydat']; ?></td>
                <td><?php echo $set['tongtien']; ?></td>                     
                <td><a style="color:orange; margin-left:20px;" href="index.php?action=hoadon&act=hoadonedit&masohd=<?php echo $set['masohd']?>">Cập Nhật</a></td> 
                <td><a style="color:red; margin-left:6px;" href="index.php?action=hoadon&act=hoadondelete_action&masohd=<?php echo $set['masohd']?>">Xóa</a></td> 
            </tr>
            <?php
                endwhile
            ?>
        </tbody>
    </table>
</div>
