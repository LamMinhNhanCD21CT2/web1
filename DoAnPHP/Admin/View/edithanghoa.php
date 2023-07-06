<?php
if (isset($_GET['act'])) {
  if ($_GET['act'] == 'edit') {
    $ac = 1;
  } else if ($_GET['act'] == 'insert') {
    $ac = 2;
  }
}
?>
<?php
if ($ac == 1) {
  echo '<div class="col-md-4 col-md-offset-4 text-center" style="margin:40px 0px 10px 430px"><h3 ><b>CẬP NHẬT SẢN PHẨM</b></h3></div>';
} else if ($ac == 2) {
  echo '<div class="col-md-4 col-md-offset-4" style="margin:40px 0px 10px 430px"><h3><b>THÊM SẢN PHẨM</b></h3></div>';
}
?>
<style>
  .container-edithanghoa{
    margin: 50px 0px 0px 230px;
    width: 700px;
    height: 100%;
    border: 1px solid black;
  }
  label{
    margin-left:20px;
  }
  .input-edithanghoa{
    margin: 30px 0px 30px 50px;
    width:300px;
    height:40px;
  }
  .button-edithanghoa{
    margin-left:230px;
    border:1px solid white;
    background:aqua;
    color:white;
    width:90px;
    height:30px;
    border-radius:5px;
  }
</style>
<div class="container-edithanghoa">
<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hh = new hanghoa();
    $result = $hh->getHangHoaId($id);
    $mahh = $result['mahh'];
    $tenhh = $result['tenhh'];
    $dongia = $result['dongia'];
    $giamgia = $result['giamgia'];
    $hinh = $result['hinh'];
    $nhom = $result['Nhom'];
    $maloai = $result['maloai'];
    $dacbiet = $result['dacbiet'];
    $soluotxem = $result['soluotxem'];
    $ngaylap = $result['ngaylap'];
    $mota = $result['mota'];
    $soluongton = $result['soluongton'];
  }

  if ($ac == 1) {
    echo '<form action="index.php?action=hanghoa&act=edit_action&id=' . $id . '" method="post" enctype="multipart/form-data">';
  }
  if ($ac == 2) {
    echo '<form action="index.php?action=hanghoa&act=addProd_action" method="post" enctype="multipart/form-data">';
  }
  ?>
    <form action="index.php?action=forgetpw&act=forgetpw_action" method="post">


    <label for="">Mã hàng</label>
    <input class="input-edithanghoa" style="margin-left:51px"  name="mahh" value="<?php if($ac == 1) {echo $mahh;}else if($ac == 2) {echo '';} ?>"> <br>


    <label for="">Tên hàng</label>
    <input class="input-edithanghoa"  style="margin-left:48px" type="text" name="tenhh" value="<?php if($ac == 1) {echo $tenhh;}else if($ac == 2) {echo '';} ?>" > <br>

    <label for="">Ma loai</label>
    <input class="input-edithanghoa"  style="margin-left:48px" type="text" name="maloai" value="<?php if($ac == 1) {echo $maloai;}else if($ac == 2) {echo '';} ?>" > <br>

    <label for="">Đơn giá</label>
    <input class="input-edithanghoa" style="margin-left:60px" type="text" value="<?php if($ac == 1) {echo $dongia;}else if($ac == 2) {echo '';} ?>" name="dongia"> <br>

    <label for="">Giảm giá</label>
    <input class="input-edithanghoa" style="margin-left:55px" type="text" value="<?php if($ac == 1) {echo $giamgia;}else if($ac == 2) {echo '';} ?>" name="giamgia"> <br>

    <label><img width="50px" height="50px"  name="image" src="<?php if($ac == 1) {echo $hinh;} ?>"></label>
    Chọn file để upload:<input type="file" name="image" id="fileupload" class="input-edithanghoa">

    <label for="">Nhóm</label>
    <input class="input-edithanghoa" style="margin-left:77px" type="text" value="<?php if($ac == 1) {echo $nhom;}else if($ac == 2) {echo '';} ?>" name="nhom"> <br>

    <label for="">Đặc biệt</label>
    <input class="input-edithanghoa" style="margin-left:63px" type="text" value="<?php if($ac == 1) {echo $dacbiet;}else if($ac == 2) {echo '';} ?>" name="dacbiet"> <br>

    <label for="">Số lượt xem</label>
    <input class="input-edithanghoa" style="margin-left:37px" type="text" value="<?php if($ac == 1) {echo $soluotxem;}else if($ac == 2) {echo '';} ?>" name="soluotxem"> <br>

    <label for="">Ngày lập</label>
    <input class="input-edithanghoa" style="margin-left:63px" type="text" value="<?php if($ac == 1) {echo $ngaylap;}else if($ac == 2) {echo '';} ?>"name="ngaylap"> <br>

    <label for="">Mô tả</label>
    <input class="input-edithanghoa" style="margin-left:88px" type="text" value="<?php if($ac == 1) {echo $mota;}else if($ac == 2) {echo '';} ?>" name="mota"> <br>

    <label for="">Số lượng tồn</label>
    <input class="input-edithanghoa" style="margin-left:37px" type="text" class="form-control" value="<?php if($ac == 1) {echo $soluongton;}else if($ac == 2) {echo '';} ?>" name="soluongton"> <br>

    <button class="button-edithanghoa" type="submit">Submit</button>
    </form>
</div>