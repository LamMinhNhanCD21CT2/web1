<div class="container"></div>
<link rel="stylesheet" href="/assets/CSS/product/home.css">
<!--Section: Examples-->
<div class="container text-center">
  <!-- <div class="container text-center"> -->
  <div class="row no-gutters col-xl-12" style=" text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #ff4584;
    display: inline-block;
    letter-spacing: 1px;">
    <div class="col-lg-12 p-5">
      <h1 style="color:#fff;">SẢN PHẨM MỚI RA MẮT</h1>
    </div>
    <!-- <div class="col-lg-12 pb-2">
        <a href="index.php?action=sanpham">
          <button class="btn btn-primary btn-sm" type="button" style="width:300px;"><span style="color: white;">
              <h2>Xem nhiều hơn</h2>
            </span></button>
        </a>
      </div> -->
    <div class="box col-lg-12 pb-2">
      <a href="index.php?action=sanpham">
        <button class="button">
          <span>Xem thêm nhiều hơn</span>
        </button>
      </a>
    </div>
    <!-- </div><br> -->
  </div>
  <div class="container-fluid bg-dark">
    <!--Grid row-->
    <div class="row col-xl-12">
      <?php
      $hh = new hanghoa();
      $result = $hh->getHangHoaNew(); // bảng chứa 12 spham
      while ($set = $result->fetch()) :
      ?>
        <!--Grid column-->
        <div class="gallery col-xl-3">
          <div class="content p-3">
            <img src="\assets\img\<?php echo $set["hinh"]; ?>" class="img-fluid p-4" alt="">
            <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"] ?>">
              <h5><?php echo $set["tenhh"] ?></h5>
            </a>
            <p><?php echo $set["mota"] ?></p>
            <h4 class="">
              <?php echo number_format($set["dongia"]); ?> <sup><u>đ</u></sup></br>
            </h4>
          </div>
        </div>
      <?php
      endwhile;
      ?>
    </div>
    <!--Grid row-->
  </div>

  <section id="examples" class="container-fluid text-center">
    <div class="row no-gutters d-flex justify-between p-4" style=" text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #ff4584;
    display: inline-block;
    letter-spacing: 1px;">
      <div class="col-lg-12 p-3">
        <h1 style="color:#fff">SẢN PHẨM ĐANG SALE SẬP SÀN NÈ BÀ CON</h1>
      </div>
      <div class="box col-lg-12 ">
        <a href="index.php?action=sanpham&act=khuyenmai">
        <button class="button">
          <span>Xem thêm nhiều hơn</span>
        </button>
        </a>
      </div>
      
    </div>
    <div class="row col-xl-12">
      <?php
      $result = $hh->getHangHoaSale(); // bảng 4 spham
      // duyệt qua 4 spham
      while ($set = $result->fetch()) :
      ?>
        <!--Grid column-->
        <div class="gallery col-xl-3">
          <div class="content p-3">
            <img src="\assets\img\<?php echo $set["hinh"]; ?>" class="img-fluid p-4" alt="">
            <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"] ?>">
              <h5><?php echo $set["tenhh"] ?></h5>
            </a>
            <p><?php echo $set["mota"] ?></p>
            <h4 class="">
              <?php echo number_format($set["dongia"]); ?> <sup><u>đ</u></sup></br>
            </h4>
          </div>
        </div>
      <?php
      endwhile
      ?>
    </div>
    <!--Grid row-->
  </section>
</div>

<!-- end sản phẩm khuyến mãi -->