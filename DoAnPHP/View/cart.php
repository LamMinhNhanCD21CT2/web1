<style>
    .minus-btn {
        width: 30px;
        height: 30px;
        border: 3px solid rgb(227, 64, 83);
        border-radius: 50%;
        font-size: 20px;
        line-height: 24px;
    }

    .plus-btn {
        width: 30px;
        height: 30px;
        border: 3px solid rgb(89, 227, 125);
        border-radius: 50%;
        font-size: 20px;
        line-height: 24px;
    }

    .quantity-input {
        width: 50px;
        text-align: center;
    }

    #custom-table {
    border-radius: 10px;
    overflow: hidden;
}
</style>
<div class="table-wrapper">
    <div class="table-responsive pt-4">
    <form id="custom-table" action="index.php?action=giohang&act=update_item" method="post">
        <table class="table table-bordered bg-light">
            <thead>
                <tr>
                    <td class="text-center" colspan="6">
                        <h1 style="color: red;">Your Cart</h1>
                    </td>
                </tr>
                <tr class="table">
                    <th>
                        <h3>Number</h3>
                    </th>
                    <th>
                        <h3>Description</h3>
                    </th>
                    <th>
                        <h3>Cost</h3>
                    </th>
                    <th>
                        <h3>Quantity</h3>
                    </th>
                    <th>
                        <h3>Into money</h3>
                    </th>
                    <th>
                        <h3>Option</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $j = 0;
                foreach ($_SESSION['cart'] as $key => $item) {
                    $j++;
                ?>
                    <tr class="text-center" >
                        <td><a><?php echo $j; ?></a></td>
                        <td class="d-flex align-items-center">
                            <img width="80px" height="80px" src="assets\img\<?php echo $item['hinh']; ?>">
                            <h3> <?php echo $item['ten']; ?></h3>
                        </td>
                        <td><a> Đơn Giá: <?php echo number_format($item['dongia']); ?></a></td>
                        <td>
                            <div class="quantity">
                                <?php if (isset($_POST['edit_qty']) && $_POST['edit_qty'] == $key) { ?>
                                    <button class="minus-btn" type="button" id="minus-btn-<?php echo $key; ?>"><a> -</a></button>
                                    <input class="quantity-input" type="text" name="newqty[]" value="<?php echo $item['soluong']; ?>" id="quantity-input-<?php echo $key; ?>" />
                                    <button class="plus-btn" type="button" id="plus-btn-<?php echo $key; ?>"><a>+</a></button>

                                <?php } else { ?>
                                    <span><a><?php echo $item['soluong']; ?></a></span>
                                <?php } ?>
                            </div>
                        </td>
                        <td>
                            <a class="text-center"><?php echo number_format($item['total']); ?><sup><u>đ</u></sup></a>
                        </td>
                        <td class="text-dark">
                            <?php if (isset($_POST['edit_qty']) && $_POST['edit_qty'] == $key) { ?>
                                <button type="submit" class="btn btn-primary">Đồng ý</button>
                            <?php } else { ?>
                                <button type="submit" class="btn btn-secondary" name="edit_qty" value="<?php echo $key; ?>"> Sửa</button>
                            <?php } ?>
                            <a href="index.php?action=giohang&act=delete_item&id=<?php echo $key; ?>">
                                <button type="button" class="btn btn-danger">Xóa</button>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="4">
                        <h3>Total</h3>
                    </td>
                    <td>
                        <h4>
                            <?php
                            $gh = new giohang();
                            echo $gh->getTotal();
                            ?>
                            <sup><u>đ</u></sup>
                        </h4>
                    </td>
                    <td class="text-center"><button class="btn btn-danger" type="submit" name="submit" value="Update">Update Cart</button>
                            <a href="index.php?action=giohang&act=order" class="btn btn-success">Payment</a></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
</div>

<script>
    // Lặp qua các phần tử có class "plus-btn"
    var plusButtons = document.querySelectorAll('.plus-btn');
    plusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Tìm số thứ tự của nút "+" trong danh sách nút
            var index = Array.from(plusButtons).indexOf(button);

            // Tăng giá trị số lượng
            var quantityInput = document.getElementById('quantity-input-' + index);
            quantityInput.value = parseInt(quantityInput.value) + 1;
        });
    });

    // Lặp qua các phần tử có class "minus-btn"
    var minusButtons = document.querySelectorAll('.minus-btn');
    minusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Tìm số thứ tự của nút "-" trong danh sách nút
            var index = Array.from(minusButtons).indexOf(button);

            // Giảm giá trị số lượng, nhưng không nhỏ hơn 1
            var quantityInput = document.getElementById('quantity-input-' + index);
            quantityInput.value = Math.max(parseInt(quantityInput.value) - 1, 1);
        });
    });
</script>