<div class="p-4">

    <a href="./index.php?act=orderlist">
        << Trở về danh sách đơn hàng</a>

            <h3 class="title mt-5">Danh sách đơn hàng theo id user la: <?php echo $iduser ?> </h3>
            <table class="table table-hover shadow">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">id cart</th>
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
                <td>$' . $cart_item['dongia'] . '</td>
            </tr>
                ';
}
?>

                </tbody>
            </table>
</div>