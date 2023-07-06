<style>
.box{
    padding: 20px 10px;
    max-width: 100%;
    margin: 0 auto;
}
</style>

<div class="table-reponsive box">
    <h3 class="text-center" style="margin-top:150px;"><b>DANH SÁCH CHI TIẾT HÓA ĐƠN</b></h3>
    <table id="example" class="table table-bordered">
        <thead>
        <tr>
                
                <th>Mã hàng hóa</th>
                <th>Số lượng mua</th>
                <th>Thành tiền</th>
                <th>Tình Trạng</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $cthd = new cthoadon();
                $result = $cthd->getCTHoaDonAll();
                while ($set = $result->fetch()) :
            ?>
            <tr>
                
                <td><?php echo $set['mahh']; ?></td>
                <td><?php echo $set['soluongmua']; ?></td>
                <td><?php echo $set['thanhtien']; ?></td>
                <td><?php echo $set['tinhtrang']; ?></td>

                <td><a style="color:orange; margin-left:20px;" href="index.php?action=cthoadon&act=cthoadonedit&mahh=<?php echo $set['mahh']?>"><i class="fa fa-edit" aria-hidden="true">cap nhat</i></a></td> 
                <td><a style="color:red; margin-left:6px;" href="index.php?action=cthoadon&actandhoadon&act=cthoadondelete_action&mahh=<?php echo $set['mahh']?>"><i class="fa fa-trash" aria-hidden="true">xoa</i></a></td> 
            </tr>
            <?php
                endwhile
            ?>
        </tbody>
    </table>
</div>
