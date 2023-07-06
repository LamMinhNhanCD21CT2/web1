<link rel="stylesheet" href="/assets/CSS/product/home.css">
  <!-- quảng cáo -->
  <?php
  include "quangcao.php";
  $hh = new hanghoa();

//   $count = $hh->getCountHH();
//  B1: tìm tổng số record
$result=$hh->getHangHoaAll();
$count=$result->rowCount();
// b2
$limit=8;
//b3
$p= new page();
//tổng số trang
$page = $p->findPage($count,$limit);
// lấy start
$start = $p->findStart($limit);
// trang hiện tại
$current_page=isset($_GET['page'])?$_GET['page']:1;
?>
  
  <!-- end quảng cáo -->
  
  
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
 

  <!--Section: Examples-->
  <section id="examples" class="container-fluid text-center">

      <!-- Heading -->
      <div class="row" style=" text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #ff4584;
    display: inline-block;
    letter-spacing: 1px;">
      <div class=" p-5">
                <h1 style="color:#fff;font-weight:bold">SẢN PHẨM SALE SẬP SÀN</h1>
              </div>

      </div>
      <div class="box col-lg-12 pb-2">
      <a href="index.php?action=home">
        <button class="button">
          <span>Trở về trang trước</span>
        </button>
      </a>
    </div>
      <!--Grid row-->
      <div class="row col-xl-12">
            <?php
                $hh= new hanghoa();
                $result=$hh->getHangHoaAllSale();// trả về bảng chứa all
                while($set=$result->fetch()):
            ?>
              <!--Grid column-->
              <div class="gallery col-xl-4">
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
 
  
  <!-- end sản phẩm mới nhất -->
  
 
  <div class="container-fluid text-center">
  <div class="row no-gutters col-xl-12">
    <ul class="pagination col-xl-12">
      <?php 
        if($current_page>1 && $page>1){
          echo ' <li ><a href="index.php?action=sanpham&page='.($current_page-1).'">Trang trước đó</a></li>' ;
        }
        for($i=1;$i<=$page;$i++)
        {
      ?>
        <li ><a href="index.php?action=sanpham&page=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php 
        }
        ?>
    </ul>
  </div>
</div>