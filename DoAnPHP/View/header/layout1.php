<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between">
    <!-- Left elements -->
    <div class="d-flex">
      <!-- Brand -->
      <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="index.php?action=news">
        <img src="/assets/img/logolangla.jpg" alt="" style="height:35px">
        <h4 style="padding-top:4px;">&ensp; Freedman Store</h4>
      </a>
      <!-- Search form -->
      <form class="input-group w-auto my-auto d-none d-sm-flex" action="index.php?action=sanpham&act=timkiem" method="post">
        <input autocomplete="off" type="text" name="txtsearch" class="form-control rounded" placeholder="Tìm kiếm sản phẩm" style="min-width: 325px;" />
        <span class="input-group-text border-0 d-none d-lg-flex">
          <i class="fas fa-search" type="submit" id="btsearch" value="Tìm Kiếm"></i>
        </span>
      </form>
    </div>
    <!-- Left elements -->

    <!-- Center elements -->
    
    <!-- Center elements -->
    <!-- Right elements -->
    <ul class="navbar-nav flex-row d-none d-md-flex ">
      <li class="nav-item me-3 me-lg-1 active">
        <a class="nav-link" href="index.php?action=news">
          <span><i class="fas fa-home fa-lg"> Trang chủ</i></span>
        </a>
      </li>
      
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="index.php?action=home">
          <span><i class="fa fa-paper-plane-o fa-lg"> Sản phẩm</i></span>
        </a>
      </li>
      
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="index.php?action=giohang">
          <span><i class="fa fa-cart-arrow-down fa-lg"></i></span>
        </a>
      </li>
      <li>
        <?php
        $dem = 0;
        if (isset($_SESSION['cart'])) {
          $dem = count($_SESSION['cart']);
        } else {
          $dem = 0;
        }
        ?>
        <p style="color: red; padding-top: 20px; margin-left: 0px;">(<?php echo $dem; ?>)&emsp;-&emsp;</p>
      </li>
      <li>
        <?php
        if (isset($_SESSION['makh']) && isset($_SESSION['tenkh'])) :

          $name = $_SESSION['tenkh'];
        ?>
          <p style="color: gray; padding-top: 20px; margin-left: 0px;" class="font-weight-bold"><?php echo "Welcom " . $name; ?></p>
        <?php
        else :
          echo '<p style="color: gray; padding-top: 20px; margin-left: 0px;" class="font-weight-bold">' . "Welcom to Freedman" . '</p>';

        ?>
        <?php
        endif;
        ?>
      </li>
    </ul>
    <ul class="navbar-nav flex-row">
      <li class="nav-item">
        <div class="dropdown">
          <a class=" dropdown-toggle" href="#" style="text-decoration:none;color:black" role="button" data-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"><b style="font-size: 14px;"> Tài khoản</b></i>
          </a>
          <div class="dropdown-menu">
            <?php
            if (isset($_SESSION['makh'])) { // kiểm tra nếu người dùng đã đăng nhập
              echo '<a href="index.php?action=dangnhap&act=logout" class="dropdown-item"><h5>Đăng xuất</h5></a>'; // nút đăng xuất
            } else {
              echo '<a href="index.php?action=dangnhap" class="dropdown-item"><h5>Đăng nhập</h5></a>'; // nút đăng nhập
              echo '<a href="index.php?action=dangky" class="dropdown-item"><h5>Đăng ký</h5></a>'; // nút đăng ký
            }
            ?>
          </div>
        </div>
      </li>
    </ul>
    <!-- Right elements -->
  </div>
</nav>