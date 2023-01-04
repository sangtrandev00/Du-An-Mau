<?php
$order_list = get_all_orders();
?>

<div class="p-2">

    <h3 class="title mt-5">Danh sách đơn hàng (Tổng số đơn hàng là: <?php echo count($order_list) ?>)</h3>
    <div style="overflow-x: auto;">

        <table class="table table-hover table-order">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">iddh</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Tổng đơn hàng</th>
                    <th scope="col">PTTT</th>
                    <th scope="col">Người đặt</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Thời gian đặt hàng</th>

                </tr>
            </thead>
            <tbody>
                <?php
foreach ($order_list as $order) {
    # code...
    echo '
                <tr>
                <th scope="row"> <a href="./index.php?act=orderdetail&iddh=' . $order['id'] . '" >' . $order['id'] . '</a> </th>
                <td>' . $order['madonhang'] . '</td>
                <td>' . $order['tongdonhang'] . '</td>
                <td>' . $order['pttt'] . '</td>
                <td> <a href="./index.php?act=userorderdetail&iduser=' . $order['iduser'] . '"> ' . $order['name'] . '</a></td>
                <td>' . $order['dienThoai'] . '</td>
                <td>' . $order['email'] . '</td>
                <td>' . $order['address'] . '</td>
                <td>' . $order['ghichu'] . '</td>
                <td>' . $order['timeorder'] . '</td>
            </tr>
                ';
}

?>

            </tbody>
        </table>
    </div>
</div>