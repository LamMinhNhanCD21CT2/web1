<style>
  .container-editcustomer{
    margin: 50px 0px 0px 370px;
    width: 500px;
    height: 900px;
    border: 1px solid black;
  }
  label{
    margin-left:20px;
  }
  .email-editcustomer{
    margin: 30px 0px 30px 50px;
    width:300px;
    height:40px;
  }
  .button-editcustomer{
    margin-left:225px;
    border:1px solid white;
    background:black;
    color:white;
    width:90px;
    height:30px;
    border-radius:5px;
  }
</style>
<?php
if (isset($_GET['act'])) {
  if ($_GET['act'] == 'customeredit') {
    $ac = 1;
  }
}
?>
<?php
if ($ac == 1) {
  echo '<div class="text-center" style="margin:50px 0px 0px 520px"><h3><b>Update Customer</b></h3></div>';
}
?>

<div class="container-editcustomer">
<?php
  if (isset($_GET['makh'])) {
    $makh = $_GET['makh'];
    $kh = new customer();
    $result = $kh->getCustomerId($makh);
    $makh = $result['makh'];
    $tenkh = $result['tenkh'];
    $user = $result['username'];
    $matkhau = $result['matkhau'];
    $email = $result['email'];
    $diachi= $result['diachi'];
    $dt= $result['sodienthoai'];
    $vaitro= $result['vaitro'];

  }
  ?>


  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=customer&act=editcustomer_action&makh=' . $makh . '" method="post" enctype="multipart/form-data">';
  }
  ?>
    <form action="" method="post">
  
    <label for="">MÃ KH</label>
    <input class="email-editcustomer" type="text" name="makh" value="<?php if($ac == 1) {echo $makh;}else if($ac == 2) {echo '';} ?>" readonly> <br>

    <label for="">TÊN KH</label>
    <input class="email-editcustomer" type="text" name="tenkh" value="<?php if($ac == 1) {echo $tenkh;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>

    <label for="">USERNAME</label>
    <input class="email-editcustomer" type="text" name="username" value="<?php if($ac == 1) {echo $user;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
       
    <label for="">MẬT KHẨU</label>
    <input type="text" class="email-editcustomer" name="matkhau" value="<?php if($ac == 1) {echo $matkhau;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>

    <label for="">EMAIL</label>
    <input type="text" class="email-editcustomer" name="email" value="<?php if($ac == 1) {echo $email;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>

    <label for="">ĐỊA CHỈ</label>
    <input type="text" class="email-editcustomer" name="diachi" value="<?php if($ac == 1) {echo $diachi;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>

    <label for="">SĐT</label>
    <input type="text" class="email-editcustomer" name="sodienthoai" value="<?php if($ac == 1) {echo $dt;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
    <label for="">Vai Trò</label>
    <input type="text" class="email-editcustomer" name="vaitro" value="<?php if($ac == 1) {echo $vaitro;}else if($ac == 2) {echo '';} ?>"> <br>

    
    <button class="button-editcustomer" type="submit" value="<?php if($ac == 1) {echo 'Update';} else if($ac == 2) {echo 'Create';} ?>">Submit</button>
    </form>
</div>