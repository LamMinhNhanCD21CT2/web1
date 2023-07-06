<style>
.box{
    padding: 10px 50px;
    max-width: 50%;
    margin: 0 auto;
}
button a{
  color:white;
}
</style>
<?php
    if(isset($_SESSION['admin'])) {
        include "./View/headder.php";
    }
?>

<div class="table-reponsive box">
    <h3 class="text-center" style="margin-top:150px;"><b>DANH SÁCH LOẠI SẢN PHẨM</b></h3>
    <div class="row col-12 mb-5">
    <button class="btn btn-primary"><a href="index.php?action=category&act=themCategory" >Thêm Loại Sản Phẩm</a></button>
    </div>
    <table id="example" class="table table-striped table-bordered">
        <thead>
        <tr class="table-danger">
        <th>Mã Loại</th>
        <th>Tên Loại</th>

        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
        </thead>
        <tbody>
        <?php 
        $loai = new loai();
        $result = $loai->getLoai();
        while($set=$result->fetch()):

      ?>
      <tr>
        <td><?php echo $set['maloai']; ?> </td> 
        <td><?php echo $set['tenloai']; ?></td> 

      
        <td><a href="index.php?action=category&act=categoryEdit&maloai=<?php echo $set['maloai']?>">Cập nhật</a></td> 
        <td><a href="index.php?action=category&act=categoryDelete_action&maloai=<?php echo $set['maloai']?>">Xóa</a></td> 
      </tr>
      <?php 
        endwhile;
      ?>
        </tbody>
    </table>
</div>

<?php
        if(isset($_SESSION['admin'])) {
            include "./View/footer.php";
        }
    ?>



