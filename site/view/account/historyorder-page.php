<table class="table mt-5 table-hover shadow p-3">
    <form action="" method="post">
        <input type="text" name="searchhistory" class="form-control" id="" value=""
            placeholder="Tìm kiếm lịch sử theo mã đơn hàng">
    </form>
    <thead class="text-dark bg-light p-3">

        <tr>

            <th scope="col">iddh</th>
            <th scope="col">Mã đơn hàng</th>
            <!-- <th scope="col">Hình ảnh</th>
            <th scope="col">Tên sản phẩm</th> -->
            <th scope="col">Số lượng</th>

            <th scope="col">Tổng tiền</th>
            <th scope="col">Phương thức thanh toán</th>
            <th scope="col">Thời gian đặt hàng</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Hành động</th>

        </tr>

    </thead>
    <tbody>

        <?php

if (isset($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
    $cart_list = getShowCartGroupbyOrder($iduser);
    //var_dump($cart_list);
    foreach ($cart_list as $cart_item) {
        $trangthai = showStatus($cart_item['trangthai'])[0];
        # code...

        echo '

    <tr class="p-3">

        <td class="" scope="row"> <a class="text-decoration-none" href="./index.php?act=historyorderdetailpage&id=' . $cart_item['iddonhang'] . '">' .
            $cart_item['iddonhang'] . '</a></td>
        <td class="">' . $cart_item['madonhang'] . '</td>
        <td class="">' . $cart_item['soluong'] . '</td>
        <td class="">' . $cart_item['tongdonhang'] . '</td>
        <td class="">' . $cart_item['pttt'] . '</td>
        <td class="">' . $cart_item['timeorder'] . '</td>
        <td class="text-danger">' . $trangthai . '</td>
        <td class=""><a class="text-decoration-none" href="./index.php?act=historyorderdetailpage&id=' . $cart_item['iddonhang'] . '"><i class="fa-solid fa-eye"></i> Xem</a></td>
        </tr>
        ';
    }

    ?>

    </tbody>
</table>
<?php
}
?>