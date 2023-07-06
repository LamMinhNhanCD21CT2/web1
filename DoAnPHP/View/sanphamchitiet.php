<link rel="stylesheet" href="/assets/CSS/product/sanphamchitiet.css">
<div class="container-fluid html2 pt-5">
    <form class="body2 row no-gutters" action="index.php?action=giohang" method="post">
        <?php
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $hh = new hanghoa();
            $result = $hh->getHangHoaId($id);
            $mahh = $result["mahh"];
            $tenhh = $result["tenhh"];
            $hinh = $result["hinh"];
            $dongia = $result["dongia"];
            $mota = $result["mota"];
            $nhom = $result["Nhom"];
        }
        ?>
    <section class="product">
        
            <div class="product__photo">
                <div class="photo-container">
                    <div class="photo-main">
                        <div class="controls">
                            <i class="material-icons">share</i>
                            <i class="material-icons">favorite_border</i>
                        </div>
                        
                        <div class="" >
                            <img src="assets/img/<?php echo $hinh ?>" alt="image" class="img-fluid" style="width:350px;height:360px">
                        </div>

                    </div>
                </div>
            </div>
            <div class="product__info" name="mahh" >
            <input type="hidden" name="mahh" value="<?php echo $id; ?>" />
                <div class="title">
                    <h1><?php echo $tenhh; ?></h1>
                    <span>COD: 45999</span>
                </div>
                
                <div class="stars"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                    <div class="price">
                    VNĐ <span><?php echo number_format($dongia); ?></span>
                    </div>

                    <div class="product-description">
                        <h3>Description</h3>
                        <ul>
                            <li><?php echo $mota ?></li>
                        </ul>
                    </div>
                    <div class="p-3">
                        Số Lượng:
                        <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                    </div>
                    <button class="buy--btn add-to-cart"  type="submit" data-toggle="modal" data-target="#myModal">MUA HÀNG NGAY</button>
                </div>
        </section>
    </form>
</div>
<div class="container p-4">
<div class="detailBox">
     <?php
                if (isset($_GET['id'])) {
                    $mahh = $_GET['id'];
                    $usr = new user();
                    $tong = $usr->getCountHH($mahh);
                }
                ?>
    <div class="titleBox">
      <label>Comment Box</label>
        <!-- <button type="button" class="close" aria-hidden="true">&times;</button> -->
    </div>
    <ul class="commentList">
            <li>
                <?php
                    $result = $usr->getComment($mahh);
                    while ($set = $result->fetch()) :
                ?>
                <div class="row d-flex p-2 col-xl-12">
                    <div class="col-xl-1" ><img style="width:30px" src="/assets/img/logokonoha.jpg" class="img-fluid" /></div>
                    <p class="col-xl-11 text-light"><?php echo '<b>' . $set['username'] . ':</b>' . $set['noidung']; ?></p>
                </div>
                
            </li>
            <?php
                    endwhile;
                ?>
        </ul>          
    <form class="actionBox" action="index.php?action=sanpham&act=comment&id=<?php echo $_GET['id']; ?>" method="post">
        
        <div class="form-inline" role="form">
        <div class="row p-4">
                            <input type="hidden" name="txtmahh" value=""/>
                            <img src="/assets/img/logokonoha.jpg" width="50px" height="50px" ; />
                            <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                            <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
                        </div>
        </div>
    </form>
</div> 
</div>
