<!-- Nhúng các file CSS của Bootstrap -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="/assets/CSS/product/home.css">
<style>
    .sp-custom {
        background-color: black;
        color: #fff;
    }

    ul.no-bullet {
        list-style-type: none;
    }

    .content1 {
        display: block;
    }     
</style>
<div class="sp-custom">
    <div class="row no-gutters">
        <div class="col-12 col-md-2 bg-dark">
            <!-- Phần bên trái -->
            <div class="card bg-dark">
                <div class="card-header">
                    <h2 style="color:#ff4584">Tùy chọn của bạn</h2>
                </div>
                <div class="card-body bg-dark">
                    <!-- Hiển thị danh sách tùy chọn -->
                    <ul class="no-bullet justify-content-center">
                        <li>
                            <label class="d-flex">
                                <input type="radio" name="option" value="latest" onclick="showContent('latestContent');">
                                <h3 style="padding-top:5px;padding-left:3px">Sản phẩm mới nhất</h3>
                            </label>
                        </li>
                        <li>
                            <label class="d-flex">
                                <input type="radio" name="option" value="promotion" onclick="showContent('promotionContent');">
                                <h3 style="padding-top:5px;padding-left:3px">Sản phẩm khuyến mãi</h3>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-10 bg-dark">
            <!-- Phần bên phải -->
            <div class="card bg-dark">
                <div class="card-header">
                    <h2 style="color:#ff4584">Kết quả đã chọn</h2>
                </div>
                <div class="card-body bg-dark">
                    <!-- Nội dung tùy chọn -->
                    <div id="latestContent" class="content1">
                    <div class="row no-gutters" style="text-transform: uppercase; margin-bottom: 20px; border-bottom: 4px solid #ff4584; display: inline-block; letter-spacing: 1px;">
                            <div class="col-12 p-3">
                                <h1 style="color:#fff">SẢN PHẨM MỚI RA MẮT</h1>
                            </div>
                        </div>
                        <div class="box col-12 p-2">
                            <a href="index.php?action=sanpham">
                                <button class="button">
                                    <span>Xem thêm nhiều hơn</span>
                                </button>
                            </a>
                        </div>
                        <div class="row no-gutters">
                            <!-- Hiển thị sản phẩm mới nhất -->
                            <?php
                            // Kết nối và truy vấn cơ sở dữ liệu để lấy dữ liệu sản phẩm mới nhất
                            $hh = new hanghoa();
                            $result = $hh->getHangHoaNew(); // bảng chứa 12 sản phẩm
                            while ($set = $result->fetch()) :
                            ?>
                                <div class="col-6 col-sm-4 col-md-3 col-lg-3 gallery p-3">
                                    <div class="content p-1">
                                        <img src="/assets/img/<?php echo $set["hinh"]; ?>" class="img-fluid p-4" alt="">
                                        <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"] ?>">
                                            <h5><?php echo $set["tenhh"] ?></h5>
                                        </a>
                                        <p><?php echo $set["mota"] ?></p>
                                        <h4 class="">
                                            <?php echo number_format($set["dongia"]); ?> <sup><u>đ</u></sup><br>
                                        </h4>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                    <div id="promotionContent" class="content1">
                        <div class="row no-gutters" style="text-transform: uppercase; margin-bottom: 20px; border-bottom: 4px solid #ff4584; display: inline-block; letter-spacing: 1px;">
                            <div class="col-12 p-3">
                                <h1 style="color:#fff">SẢN PHẨM ĐANG SALE SẬP SÀN NÈ BÀ CON</h1>
                            </div>
                        </div>
                        <div class="box col-12">
                            <a href="index.php?action=sanpham&act=khuyenmai">
                                <button class="button">
                                    <span>Xem thêm nhiều hơn</span>
                                </button>
                            </a>
                        </div>
                        <div class="row">
                            <!-- Hiển thị sản phẩm khuyến mãi -->
                            <?php
                            // Kết nối và truy vấn cơ sở dữ liệu để lấy dữ liệu sản phẩm khuyến mãi
                            $result = $hh->getHangHoaSale(); // bảng 4 sản phẩm
                            while ($set = $result->fetch()) :
                            ?>
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 gallery p-2">
                                    <div class="content p-1">
                                        <img src="/assets/img/<?php echo $set["hinh"]; ?>" class="img-fluid p-4" alt="">
                                        <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"] ?>">
                                            <h5><?php echo $set["tenhh"] ?></h5>
                                        </a>
                                        <p><?php echo $set["mota"] ?></p>
                                        <h4 class="">
                                            <?php echo number_format($set["dongia"]); ?> <sup><u>đ</u></sup><br>
                                        </h4>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Nhúng các file JavaScript của Bootstrap và script tùy chỉnh -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
<script>
    function showContent(option) {
        // Ẩn tất cả các nội dung
        var contents = document.getElementsByClassName('content1');
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }

        // Hiển thị nội dung tương ứng với tùy chọn được chọn
        document.getElementById(option).style.display = 'block';
    }
    document.addEventListener("DOMContentLoaded", function() {
        var contents = document.getElementsByClassName('content1');
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }

        // Hiển thị tất cả sản phẩm ban đầu
        var allContent = document.getElementById('latestContent');
        allContent.style.display = 'block';
    });
</script>
