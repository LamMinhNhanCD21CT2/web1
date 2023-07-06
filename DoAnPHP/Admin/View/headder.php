<!-- dang ky -->
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
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center logo" href="http://datncms.local">
                <h2 style="padding-top:4px;text-decoration:none;color:white;font-weight:bold;">&ensp; Freedman Store</h2>
            </a>
            <label for="toggler"><i class="fa fa-bars"></i></label>
            <div class="menu">
                <ul class="list">
                    <li><a href="index.php?action=hanghoa">Danh sách Hàng Hóa</a></li>
                    <li><a href="index.php?action=thongke">Thống kê</a></li>
                    <li><a href="index.php?action=tonkho">Tồn kho</a></li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" onclick="toggleDropdown()" role="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"> &ensp;</i>Quản trị doanh mục
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=cthoadon"><strong>Chi Tiet Hoa Don</strong></a>

                                <a class="dropdown-item" href="index.php?action=hoadon"><strong>Hóa Đơn</strong></a>
                                <a class="dropdown-item" href="index.php?action=customer"><strong>Khách Hàng</strong></a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleDropdown() {
        var dropdown = document.querySelector('.dropdown');
        dropdown.classList.toggle('show');
    }
</script>