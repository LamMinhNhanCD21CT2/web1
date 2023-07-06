<link rel="stylesheet" href="/assets/CSS/header/style2.css">
<style>
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-toggle {
    /* background-color: #f1f1f1; */
    border: none;
    color: #333;
    padding: 10px 20px;
    cursor: pointer;
  }
  
  .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    padding: 10px;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    display: none;
  }
  
  .dropdown-menu .dropdown-item {
    display: block;
    padding: 5px 0;
    text-decoration: none;
    color: #333;
    text-align: center;
  }
  
  .dropdown.show .dropdown-menu {
    display: block;
    width: 200px;
  }

</style>
<div class="container-fluid justify-content-between bg-dark ctn-custom1">
    <div class="row d-flex justify-content-between custom-hd">
        <div class="navbar col-xl-12 ">
            <input type="checkbox" id="toggler" />
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center logo" href="index.php?action=news">
                <h2 style="padding-top:4px;text-decoration:none;color:white;font-weight:bold;">&ensp; Freedman Store</h2>
            </a>
            <label for="toggler"><i class="fa fa-bars"></i></label>
            <div class="menu">
                <ul class="list">
                    <li><a href="index.php?action=news">Home</a></li>
                    <li><a href="index.php?action=home2">Product</a></li>
                    <li>
                    <a href="index.php?action=giohang"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>&ensp;
                    <?php
                        $dem = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
                        if ($dem > 0) {
                            echo '<a href="index.php?action=giohang" style="color:red">Hàng trong giỏ. Số lượng: ' . $dem . ' món</a>';
                        } else {
                            echo '<a style="color:red">Giỏ hàng trống</a>';
                        }
                    ?>
                    </li>
                   
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#"  onclick="toggleDropdown()" role="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"> &ensp;</i>Tài khoản
                            </a>
                            <div class="dropdown-menu">
                                <?php
                                if (isset($_SESSION['makh'])) { // kiểm tra nếu người dùng đã đăng nhập
                                    echo '<a href="index.php?action=dangnhap&act=logout" style="color:black" class="dropdown-item"><h5>Đăng xuất</h5></a>';
                                    echo '<a href="index.php?action=history" style="color:black" class="dropdown-item"><h5>Lịch sử mua hàng</h5></a>'; // nút đăng xuất
                                } else {
                                    echo '<a href="index.php?action=dangnhap" style="color:black" class="dropdown-item"><h5>Đăng nhập</h5></a>'; // nút đăng nhập
                                    echo '<a href="index.php?action=dangky" style="color:black" class="dropdown-item"><h5>Đăng ký</h5></a>'; // nút đăng ký
                                }
                                ?>
                            </div>
                        </div>
                    </li>

                    <li>
                        <?php
                        if (isset($_SESSION['makh']) && isset($_SESSION['tenkh'])) :

                            $name = $_SESSION['tenkh'];
                        ?>
                            <a style="color: gray;" class="font-weight-bold"><?php echo "Welcom " . $name; ?></a>
                        <?php
                        else :
                            echo '<a style="color: gray;" class="font-weight-bold">' . "Welcom to Freedman" . '</a>';

                        ?>
                        <?php
                        endif;
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="row d-flex justify-content-between custom-hd2"></div>

    <div class="row no-gutters col-xl-12 p-5">
        <div class="col-xl-4"></div>
        <div class="col-xl-4">
            <form class="input-search" action="index.php?action=sanpham&act=timkiem" method="post">
                <input type="text" name="txtsearch" placeholder="Tìm kiếm gì đó...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="col-xl-4"></div>
        
    </div>

    <div class="row no-gutters col-xl-12 button-custom1 pt-5 pb-5">
        <a href="index.php?action=home2" style="--clr:#6eff3e"><span>Xem thêm sản phẩm</span><i></i></a>
    </div>
    
</div>
<script>
  function toggleDropdown() {
  var dropdown = document.querySelector('.dropdown');
  dropdown.classList.toggle('show');
}
</script>