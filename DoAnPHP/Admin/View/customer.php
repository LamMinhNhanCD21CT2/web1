<style>
.box{
    padding: 20px 10px;
    max-width: 100%;
    margin: auto;
}

</style>

<div class="table-reponsive box">
    <h3 class="text-center" style="margin:150px 0px 30px 0px;"><b>DANH SÁCH KHÁCH HÀNG</b></h3>
    <table id="example" class="table table-bordered">
        <thead>
        <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Username</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Vai Trò</th>

                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $kh = new customer();
                $result = $kh->getCustomerAll();
                while ($set = $result->fetch()) :
        ?>
            <tr>
                <td><?php echo $set['makh']; ?> </td>
                <td><?php echo $set['tenkh']; ?></td>
                <td><?php echo $set['username']; ?></td>
                <td><?php echo $set['matkhau']; ?></td> 
                <td><?php echo $set['email']; ?></td>                     
                <td><?php echo $set['diachi']; ?></td>                     
                <td><?php echo $set['sodienthoai']; ?></td>
                <td><?php echo $set['vaitro']; ?></td>                                        

                <td><a style="color:orange; margin-left:20px;" href="index.php?action=customer&act=customeredit&makh=<?php echo $set['makh']?>">Cập Nhật</a></td> 
                <td><a style="color:red; margin-left:6px;" href="index.php?action=customer&act=customerdelete_action&makh=<?php echo $set['makh']?>">Xóa</a></td> 
            </tr>
            <?php
                endwhile
            ?>
        </tbody>
    </table>
</div>
