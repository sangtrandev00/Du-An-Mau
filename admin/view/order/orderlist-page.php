<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .table-outer {
        overflow-x: scroll !important;
        position: relative;
    }

    .table-outter>table {

        /* table-layout: fixed;
        position: absolute; */
        /* white-space: nowrap; */
        width: 100%;
        display: block;
        max-width: -moz-fit-content;
        max-width: fit-content;
        /* margin: 0 auto; */
        overflow-x: auto;
        white-space: nowrap;
    }

    th,
    td {
        min-width: 200px;
    }
    </style>
</head>

<body>
    <?php
$order_list = get_all_orders();
?>

    <div class="p-2">

        <h3 class="title mt-5 bg-success p-3 text-white">Danh sách đơn hàng (Tổng số đơn hàng là:
            <?php echo count($order_list) ?>)
        </h3>

        <div style="" class="table-outter">

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
                        <th scope="col" width=200>Hành động</th>
                        <th scope="col" width=200>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

foreach ($order_list as $order) {
    # code...
    $is_confirmed_class = $order['trangthai'] == 'noconfirm' ? 'btn-success' : 'btn-danger';
    $is_confirmed_action = $order['trangthai'] == 'noconfirm' ? 'Xác nhận' : 'Xóa';
    $is_confirmed_status = $order['trangthai'] == 'noconfirm' ? 'Chờ xác nhận' : 'Đã xác nhận';
    // echo $is_confirmed_class;
    $confirm_or_delete = $order['trangthai'] == 'noconfirm' ? 'orderconfirm' : 'orderdelete';
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
                <td><a onclick="return confirm("Bạn có chắc muốn thực thi thao tác này!");" class="btn ' . $is_confirmed_class . '" href="./index.php?act=' . $confirm_or_delete . '&id=' . $order['id'] .
        '">' . $is_confirmed_action . '</a></td>
                    <td><a class="btn btn-warning" href=""> ' . $is_confirmed_status . '</a> </td>
                    </tr>
                    ';
}

?>
                </tbody>
            </table>
        </div>
    </div>


    <script>

    </script>

</body>



</html>