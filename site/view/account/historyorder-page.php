<table class="table mt-5 table-hover shadow p-3">
    <form action="" method="post">
        <input type="text" name="searchhistory" class="form-control" id="" value=""
            placeholder="Tìm kiếm lịch sử theo mã đơn hàng">
    </form>
    <thead class="text-dark bg-light">
        <tr>
            <th scope="col">iddh</th>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá / 1sp</th>
            <th scope="col">Thời gian đặt hàng</th>

        </tr>
    </thead>
    <tbody>
        <?php

if (isset($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
    $cart_list = getshowcartbyiduser($iduser);
    // var_dump($cart_list);

    foreach ($cart_list as $cart_item) {
        # code...
        $img_url = $cart_item['hinhanh'];
        echo '

                    <tr>
                    <th scope="row">' . $cart_item['iddonhang'] . '</th>
                    <td>' . $cart_item['madonhang'] . '</td>
                    <td> <img width=100 height=100 style="object-fit: cover;" src="../' . $img_url . '"/></td>
                    <td>' . $cart_item['tensp'] . '</td>
                    <td>' . $cart_item['soluong'] . '</td>
                    <td>$' . $cart_item['dongia'] . '</td>
                    <td>' . $cart_item['timeorder'] . '</td>
                </tr>
                    ';
    }
    ?>
    </tbody>
</table>
<?php
}
?>