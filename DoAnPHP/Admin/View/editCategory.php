<style>
  .container-editcategory{
    margin: 50px 0px 0px 370px;
    width: 500px;
    height: 400px;
    border: 1px solid black;
    
  }
  label{
    margin-left:20px;
  }
  .email-editcategory{
    margin: 30px 0px 30px 50px;
    width:300px;
    height:40px;
  }
  .button-editcategory{
    margin-left:220px;
    border:1px solid white;
    background:blueviolet;
    color:white;
    width:90px;
    height:30px;
    border-radius:5px;
  }
</style>
<?php
if (isset($_GET['act'])) {
  if ($_GET['act'] == 'categoryEdit') {
    $ac = 1;
  }
  if ($_GET['act'] == 'themCategory') {
    $ac = 2;
  }
}
?>
<?php
if ($ac == 1) {
  echo '<div class="text-center" style="margin:50px 0px 0px 520px"><h3><b>Update Category</b></h3></div>';
}
if ($ac == 2) {
  echo '<div class="text-center" style="margin:50px 0px 0px 520px"><h3><b>Add New Category</b></h3></div>';
}
?>
<div class="container-editcategory">
<?php
  if (isset($_GET['maloai'])) {
    $maloai = $_GET['maloai'];
    $loai = new loai();
    $result = $loai->getCategoryId($maloai);
    $maloai = $result['maloai'];
    $tenloai= $result['tenloai'];
    $idmaloai= $result['idmaloai'];
  }

  ?>
  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=category&act=editCategory_action&maloai=' . $maloai . '" method="post" enctype="multipart/form-data">';
  }
  if ($ac == 2) {
    echo '<form action="index.php?action=category&act=addCategory_action" method="post" enctype="multipart/form-data">';
  }
  ?>

    <form action="index.php?action=forgetpw&act=forgetpw_action" method="post">

    <label for="">MÃ LOẠI</label>
    <input class="email-editcategory" type="text" name="maloai" value="<?php if($ac == 1) {echo $maloai;}else if($ac == 2) {echo '';} ?>"> <br>
  


    <label for="">TÊN LOẠI</label>
    <input class="email-editcategory" type="text" name="tenloai" value="<?php if($ac == 1) {echo $tenloai;}else if($ac == 2) {echo '';} ?>" maxlength="100px">
    
    
    <label for="">ID MÃ LOẠI</label>
    <input type="text" class="email-editcategory" name="idmaloai" value="<?php if($ac == 1) {echo $idmaloai;}else if($ac == 2) {echo '';} ?>" maxlength="100px"></td>
    
    <div class="card-body">
        

    <button class="button-editcategory" type="submit" value="<?php if($ac == 1) {echo 'Update';} else if($ac == 2) {echo 'Create';} ?>">Submit</button>
    </form>
</div>