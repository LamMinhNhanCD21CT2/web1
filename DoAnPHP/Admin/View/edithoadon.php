<style>
  .container-edithoadon{
    margin: 50px 0px 0px 370px;
    width: 500px;
    height: 450px;
    border: 1px solid black;
  }
  label{
    margin-left:20px;
  }
  .email-edithoadon{
    margin: 30px 0px 30px 50px;
    width:300px;
    height:40px;
  }
  .button-edithoadon{
    margin-left:225px;
    border:1px solid black;
    background:aqua;
    color:white;
    width:90px;
    height:30px;

  }
</style>
<?php
if (isset($_GET['act'])) {
  if ($_GET['act'] == 'hoadonedit') {
    $ac = 1;
  }
}
?>
<?php
if ($ac == 1) {
  echo '<div class="text-center" style="margin:50px 0px 0px 520px"><h3><b>Cập Nhật Hóa Đơn</b></h3></div>';
}
?>

<div class="container-edithoadon">
<?php
  if (isset($_GET['masohd'])) {
    $masohd = $_GET['masohd'];
    $hd = new hoadon();
    $result = $hd->gethoadonId($masohd);
    $masohd = $result['masohd'];
    $makh = $result['makh'];
    $ngay= $result['ngaydat'];
    $tongtien= $result['tongtien'];
  }
  ?>


  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=hoadon&act=edithoadon_action&masohd=' . $masohd . '" method="post" enctype="multipart/form-data">';
  }
  ?>
    <form action="" method="post">
  
    <label for="">MÃ SỐ HD</label>
    <input class="email-edithoadon" type="text" name="masohd" value="<?php if($ac == 1) {echo $masohd;}else if($ac == 2) {echo '';} ?>" readonly> <br>

    <label for="">MÃ KH</label>
    <input style="margin-left:74px" class="email-edithoadon" type="text" name="makh" value="<?php if($ac == 1) {echo $makh;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>

    <label for="">NGÀY ĐẶT</label>
    <input class="email-edithoadon" type="text" name="ngaydat" value="<?php if($ac == 1) {echo $ngay;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
       
    <label for="">TỔNG TIỀN</label>
    <input type="text" class="email-edithoadon" name="tongtien" value="<?php if($ac == 1) {echo $tongtien;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
    
    <button class="button-edithoadon" type="submit" value="<?php if($ac == 1) {echo 'Update';} else if($ac == 2) {echo 'Create';} ?>">Submit</button>
    </form>
</div>