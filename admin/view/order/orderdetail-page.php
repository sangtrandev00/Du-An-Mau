<?php

if (isset($_GET['iddh']) && $_GET['iddh'] > 0) {
    $iddh = $_GET['iddh'];
}
$trangthai = showStatus($orderInfo['trangthai'])[0];

?>

<div class="p-4">
    <div class="notify-update-mess alert alert-success visually-hidden">Cập nhật trạng thái thành công!</div>
    <a class="text-decoration-none btn btn-outline-primary" href="./index.php?act=orderlist">
        << Trở về danh sách đơn hàng</a>
            <div class="row mt-5">
                <div class="col-md-5 shadow p-3">
                    <h3 class="title alert bg-light">Thông tin đặt hàng</h3>
                    <form action="<?php echo "index.php?act=updateorder&iddh=$iddh" ?>" method="post">
                        <div class="mb-3">
                            <p>Id đơn hàng: <span class="text-warning"><?php echo $orderInfo['id'] ?></span> </p>
                            <p>Mã đơn hàng: <span class="text-warning"><?php echo $orderInfo['madonhang'] ?></span> </p>
                            <p>Tổng đơn hàng: <span class="text-warning"><?php echo $orderInfo['tongdonhang'] ?>
                                    VND</span>
                            </p>
                            <p>Phương thức thanh toán: <span
                                    class="text-warning"><?php echo $orderInfo['pttt'] ?></span>
                            </p>
                            <p>Tên người đặt: <span class="text-warning"><?php echo $orderInfo['name'] ?></span> </p>
                            <p>Số điện thoại liên hệ: <span
                                    class="text-warning"><?php echo $orderInfo['dienThoai'] ?></span> </p>
                            <p>Địa chỉ: <span class="text-warning"><?php echo $orderInfo['address'] ?></span> </p>
                            <div class="row mt-3 py-3"><label class="col-md-4">Trạng thái:</label>
                                <div class="col-md-8">
                                    <span class="alert alert-warning"><?php echo $trangthai ?></span>
                                </div>

                            </div>
                            <div class="row my-3"><label class="col-md-4">Cập nhật Trạng thái:</label>
                                <div class="col-md-8">
                                    <select name="status" class="form-select ">
                                        <option value="1">Chờ xác nhận</option>
                                        <option value="2">Đã xác nhận</option>
                                        <option value="3">Đang giao hàng</option>
                                        <option value="4">Giao hàng thành công</option>
                                        <option value="5">Giao hàng thất bại</option>
                                        <option value="6">Đơn hàng đã bị hủy</option>
                                    </select>
                                    <input type="hidden" class="status-hidden-value" name="statusHidden"
                                        value="<?php echo $orderInfo['trangthai'] ?>">
                                </div>

                            </div>
                            <p>Thời gian đặt: <span class="text-warning"><?php echo $orderInfo['timeorder'] ?></span>
                            </p>
                            <input type="submit" class="btn btn-outline-primary" value="Cập nhật đơn hàng"
                                name="updateorderbtn" />
                            <a href="<?php echo "./index.php?act=deleteorder&iddh=$iddh"; ?>"
                                class="btn btn-outline-danger" name="deleteorder" value="Hủy đơn hàng">Xóa đơn hàng</a>
                        </div>
                    </form>
                </div>

                <div class="col-md-7 border border-info">
                    <h3 class="title mt-5">Danh sách đơn hàng theo id đơn hàng là: <?php echo $iddh ?> </h3>
                    <table class="table table-hover shadow">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">idsanpham</th>
                                <th scope="col">iddh</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá / 1sp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
foreach ($cart_list as $cart_item) {
# code...
    $img_url = "../" . $cart_item['hinhanh'];
    echo '

                <tr>
                <th scope="row">' . $cart_item['id'] . '</th>
                <td>' . $cart_item['idsanpham'] . '</td>
                <td>' . $cart_item['iddonhang'] . '</td>
                <td> <img width=100 height=100 style="object-fit: cover;" src="' . $img_url . '"/></td>
                <td>' . $cart_item['tensp'] . '</td>
                <td>' . $cart_item['soluong'] . '</td>
                <td>' . $cart_item['dongia'] . 'VND</td>
            </tr>
                ';
}
?>

                        </tbody>
                    </table>
                    <button class="btn btn-info">In hóa đơn</button>
                </div>
            </div>
</div>

<?php

?>

<script>
const statusHiddenValue = document.querySelector('.status-hidden-value').value;
// console.log(statusHiddenValue);

const optionElements = document.querySelectorAll('.form-select > option');
// console.log(optionElements);

for (const option of optionElements) {
    // if (option.value == statusHiddenValue) {
    //     console.log(option);
    // }
    // console.log(option.value);
    if (Number(option.value) == Number.parseInt(statusHiddenValue)) {
        console.log('Hello')
        option.selected = true;
    }

}
const currentUrl = location.href;
const url = new URLSearchParams(currentUrl);
const notifyMessElement = document.querySelector('.notify-update-mess');
// console.log(url.get('status'));
if (url.get('status') == 'updated') {
    notifyMessElement.classList.remove('visually-hidden');
}
</script>