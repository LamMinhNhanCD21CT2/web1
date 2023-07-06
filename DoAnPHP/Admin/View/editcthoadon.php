<style>
  .container-editcthoadon{
    margin: 30px 0px 30px 350px;
    width: 550px;
    height: 640px;
    border: 1px solid black;
  }
  label{
    margin-left:20px;
  }
  .email-editcthoadon{
    margin: 30px 0px 30px 50px;
    width:300px;
    height:40px;
  }
  .button-editcthoadon{
    margin-left:230px;
    border:1px solid black;
    background:aqua;
    color:white;
    width:90px;
    height:30px;
   
  }
</style>
<?php
if (isset($_GET['act'])) {
  if ($_GET['act'] == 'cthoadonedit') {
    $ac = 1;
  }
}
?>
<?php
if ($ac == 1) {
  echo '<div class="text-center" style="margin:50px 0px 0px 520px"><h3><b>Cập Nhật Chi Tiết Hóa Đơn</b></h3></div>';
}
?>

<div class="container-editcthoadon">
<?php
  if (isset($_GET['mahh'])) {
    $mahh = $_GET['mahh'];
    $cthd = new cthoadon();
    $result = $cthd->getcthoadonId($mahh);
    $mahh= $result['mahh'];
    $soluongmua = $result['soluongmua'];
    $mausac = $result['mausac'];
    $size = $result['size'];
    $thanhtien = $result['thanhtien'];
    $tinhtrang = $result['tinhtrang'];

  }
  ?>


  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=cthoadon&act=editcthoadon_action&mahh=' . $mahh . '" method="post" enctype="multipart/form-data">';
  }
  ?>
    <form action="" method="post">
  

    <label for="">MÃ HH</label>
    <input style="margin-left:114px" class="email-editcthoadon" type="text" name="mahh" value="<?php if($ac == 1) {echo $mahh;}else if($ac == 2) {echo '';} ?>" > <br>

    <label for="">SỐ LƯỢNG MUA</label>
    <input class="email-editcthoadon" type="text" name="soluongmua" value="<?php if($ac == 1) {echo $soluongmua;}else if($ac == 2) {echo '';} ?>" > <br>
       
    <label for="">MÀU SẮC</label>
    <input style="margin-left:84px" type="text" class="email-editcthoadon" name="mausac" value="<?php if($ac == 1) {echo $mausac;}else if($ac == 2) {echo '';} ?>" > <br>

    <label for="">NGÀY ĐẶT</label>
    <input style="margin-left:86px" class="email-editcthoadon" type="text" name="size" value="<?php if($ac == 1) {echo $size;}else if($ac == 2) {echo '';} ?>" > <br>
       
    <label for="">TỔNG TIỀN</label>
    <input style="margin-left:84px" type="text" class="email-editcthoadon" name="thanhtien" value="<?php if($ac == 1) {echo $thanhtien;}else if($ac == 2) {echo '';} ?>" > <br>

    <label for="">Tinh Trang</label>
    <input style="margin-left:84px" type="text" class="email-editcthoadon" name="tinhtrang" value="<?php if($ac == 1) {echo $tinhtrang;}else if($ac == 2) {echo '';} ?>" > <br>
    
    <button class="button-editcthoadon" type="submit" value="<?php if($ac == 1) {echo 'Update';} else if($ac == 2) {echo 'Create';} ?>">Submit</button>
    </form>
</div>