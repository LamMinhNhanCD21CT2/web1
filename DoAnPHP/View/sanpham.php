<link rel="stylesheet" href="/assets/CSS/product/home.css">
<?php
$hh = new hanghoa();

//   $count = $hh->getCountHH();
//  B1: tìm tổng số record
$result = $hh->getHangHoaAll();
$count = $result->rowCount();
// b2
$limit = 8;
//b3
$p = new page();
//tổng số trang
$page = $p->findPage($count, $limit);
// lấy start
$start = $p->findStart($limit);
// trang hiện tại
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<!-- sản phẩm-->
<?php
if (isset($_GET["act"]) == "khuyenmai") {
  $ac = 0;
}
if (isset($_GET["act"]) == "timkiem") {
  $ac = 2;
} else {
  $ac = 1;
}
?>
<!--Section: Examples-->

<section id="examples" class="container text-center">
  <!-- Heading -->
  <div class="row col-xl-12 " style=" text-transform: uppercase;
                    margin-bottom: 20px;
                    border-bottom: 4px solid #ff4584;
                    display: inline-block;
                    letter-spacing: 1px;">
    <?php
    if ($ac == 0) {
      echo '<div class=" p-5">
                <h1 style="color:#fff;font-weight:bold">SẢN PHẨM KHUYẾN MÃI</h1>
              </div>';
    }
    if ($ac == 2) {
      echo '
                  <div class=" p-5">
                    <h1 style="color:#fff;font-weight:bold;">SẢN PHẨM TÌM KIẾM</h1>
                  </div>';
    } else {
      echo '<div class=" p-5">
                <h1 style="color:#fff;font-weight:bold">SẢN PHẨM HIỆN CÓ</h1>
              </div>';
    }
    ?>
  </div>
  <div class="row no-gutters box col-xl-12 pb-2">
      <a class="col-xl-12" href="index.php?action=home">
        <button class="button">
          <span>Trở về trang trước</span>
        </button>
      </a>
    </div>

  <!--Grid row-->
</section>
  <div class="row col-xl-12">
    <?php
    $hh = new hanghoa();
    if ($ac == 0) {
      $result = $hh->getHangHoaAllSale();
    }
    if ($ac == 2) {
      if (isset($_POST['txtsearch'])) {
        $tk = $_POST['txtsearch'];
        $result = $hh->getTimKiem($tk);
      } else {
        $result = $hh->getHangHoaAll(); // Thay đổi tại đây
      }
    }
    if ($result->rowCount() === 0) {
      echo '<div  class="container-fluid text-center">
          <div class="row no-gutters col-xl-12" style="border:1px solid #fff">
          <h2 class="p-4" style="color:red;">
          Sản phẩm bạn tìm kiếm không tồn tại
          </h2>
          </div></div>';
    } else if ($ac == 2) {
      echo '<div  class="container-fluid text-center">
          <div class="row no-gutters col-xl-12" style="border:1px solid #fff">
          <h2 class="p-4" style="color:red;">
          Đây là kết quả tìm kiếm của bạn!
          </h2>
          </div></div>';
    }
    while ($set = $result->fetch()) :
    ?>
      <!--Grid column-->
      <div class="row no-gutters gallery col-xl-3 p-2">
        <div class="content w-50">
          <img src="\assets\img\<?php echo $set["hinh"]; ?>" class="img-fluid p-3" alt="">
          <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"] ?>">
            <h5><?php echo $set["tenhh"] ?></h5>
          </a>
          <p><?php echo $set["mota"] ?></p>
          <h4 class="">
            <?php echo number_format($set["dongia"]); ?> <sup><u>đ</u></sup></br>
          </h4>
        </div>
      </div>
      <!-- ============================== -->
    <?php
    endwhile
    ?>
  </div>




<div class="container-fluid text-center">
  <div class="row no-gutters col-xl-12">
    <ul class="pagination col-xl-12">
      <?php
      if ($current_page > 1 && $page > 1) {
        echo ' <li ><a href="index.php?action=sanpham&page=' . ($current_page - 1) . '">Trang trước đó</a></li>';
      }
      for ($i = 1; $i <= $page; $i++) {
      ?>
        <li><a href="index.php?action=sanpham&page=<?php echo $i ?>"><?php echo $i ?></a></li>
      <?php
      }
      ?>
    </ul>
  </div>
</div>