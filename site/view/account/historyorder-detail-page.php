<div class="p-3">
    <a class="" href="index.php?act=settingacountpage"><i class="fa-solid fa-backward"></i> Trở lại lịch sử đơn
        hàng</a>
    <table class="table mt-5 table-hover shadow p-5">
        <!-- <form action="" method="post">
        <input type="text" name="searchhistory" class="form-control" id="" value=""
            placeholder="Tìm kiếm lịch sử theo mã đơn hàng">
    </form> -->
        <thead class="text-dark bg-light p-3">

            <tr>

                <th scope="col">id</th>
                <th scope="col">id sản phẩm</th>
                <th scope="col">id đơn hàng</th>
                <!-- <th scope="col">Hình ảnh</th>
            <th scope="col">Tên sản phẩm</th> -->
                <th scope="col">số lượng</th>

                <th scope="col">đơn giá</th>
                <th scope="col">tên sp</th>
                <th scope="col">hình ảnh</th>

            </tr>

        </thead>
        <tbody>

            <?php

if (isset($_SESSION['iduser'])) {

    foreach ($cartList as $cart_item) {
        # code...
        echo '

    <tr class="p-3">
        <td class="" scope="row"> ' . $cart_item['id'] . '</td>
        <td class="">' . $cart_item['idsanpham'] . '</td>
        <td class="">' . $cart_item['iddonhang'] . '</td>
        <td class="">' . $cart_item['soluong'] . '</td>
        <td class="">' . $cart_item['dongia'] . '</td>
        <td class="">' . $cart_item['tensp'] . '</td>
        <td class=""><img width=100 height=100 src="../' . $cart_item['hinhanh'] . '" alt=""></td>
        </tr>
    ';
    }

    ?>
        </tbody>
    </table>
    <?php
}
?>
</div>