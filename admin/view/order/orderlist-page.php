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
        vertical-align: middle;
    }

    .form-select.status-selects[value="1"] {
        color: blue;
    }

    .form-select.status-selects[value="2"] {
        color: red;
    }

    .form-select.status-selects[value="3"] {
        color: green;
    }

    .form-select.status-selects[value="4"] {
        color: orange;
    }

    .form-select.status-selects[value="5"] {
        color: purple;
    }

    .form-select.status-selects[value="6"] {
        color: grey;
    }
    </style>
</head>

<body>
    <?php

// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL
$conn = connectdb();

$sql = "SELECT * FROM tbl_order"; // Total Product
$_limit = 5;
$pagination = createDataWithPagination($conn, $sql, $_limit);

// var_dump($pagination);

$order_list = $pagination['datalist'];
// var_dump($productList);
$total_page = $pagination['totalpage'];
$start = $pagination['start'];
$current_page = $pagination['current_page'];
$total_records = $pagination['total_records'];

// $order_list = get_all_orders();
?>

    <div class="p-2">

        <h3 class="title mt-5 bg-success p-3 text-white">Danh sách đơn hàng (Tổng số đơn hàng là:
            <?php echo count($order_list) ?>)
        </h3>

        <div class="filter my-3">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-2">

                        <div class="mb-3">
                            <select class="form-select form-select-md" name="" id="">
                                <option selected>Lọc đơn hàng</option>
                                <option value="">Thứ tự ngày đặt mới đên cũ</option>
                                <option value="">Thứ tự ngày đặt cũ đến mới</option>
                                <option value="">Giá cao đến thấp</option>
                                <option value="">Giá thấp đến cao</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="search" id="" placeholder="Tìm kiếm">
                    </div>
                </div>
            </form>
        </div>

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
                        <th scope="col" width=200>Thao tác</th>
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
                <th class="id-don-hang" scope="row" > <a class="text-decoration-none" href="./index.php?act=orderdetail&iddh=' . $order['id'] . '" >' . $order['id'] . '</a> </th>
                <td>' . $order['madonhang'] . '</td>
                <td>' . $order['tongdonhang'] . '</td>
                <td>' . $order['pttt'] . '</td>
                <td> <a href="./index.php?act=userorderdetail&iduser=' . $order['iduser'] . '"> ' . $order['name'] . '</a></td>
                <td>' . $order['dienThoai'] . '</td>
                <td>' . $order['email'] . '</td>
                <td>' . $order['address'] . '</td>
                <td>' . $order['ghichu'] . '</td>
                <td>' . $order['timeorder'] . '</td>
                <td>

                <div class="row my-3"><label class="col-md-4">
                   <form action="./index.php?act=updateorder&iddh=' . $order['id'] . '" method="post">
                        <input type="submit" class="btn btn-outline-success" name="updateorderbtn" value="Cập nhật">
                    <input type="hidden" name="status" value="">
                   </form>

                    <a onclick="return confirm(`Bạn có chắc muốn xóa đơn hàng này không ?`); " href="./index.php?act=deleteorder&iddh=' . $order['id'] . '" class="btn btn-outline-danger mt-2">Xóa đơn hàng</a>

                </label>

        </div>
                </td>
                    <td>
                    <select class="form-select status-selects"  value="' . $order['trangthai'] . '">
                        <option ' . ($order['trangthai'] == 1 ? "selected" : "") . '  value="1">Chờ xác nhận</option>
                        <option  ' . ($order['trangthai'] == 2 ? "selected" : "") . ' value="2">Đã xác nhận</option>
                        <option  ' . ($order['trangthai'] == 3 ? "selected" : "") . ' value="3">Đang giao hàng</option>
                        <option ' . ($order['trangthai'] == 4 ? "selected" : "") . ' value="4">Giao hàng thành công</option>
                        <option  ' . ($order['trangthai'] == 5 ? "selected" : "") . ' value="5">Giao hàng thất bại</option>
                        <option  ' . ($order['trangthai'] == 6 ? "selected" : "") . ' value="6">Đơn hàng đã bị hủy</option>

                    </select>
                </td>
                    <td><a class="btn btn-info" href="./index.php?act=orderdetail&iddh=' . $order['id'] . '"><i class="fa-solid fa-eye"></i> Xem</a><a class="btn btn-success ms-3" href=""><i class="fa-solid fa-download"></i> Lưu đơn</a></td>
                    </tr>
                    ';
}

?>
                </tbody>
            </table>

            <?php
// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
if ($current_page > 1 && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=orderlist&page=' . ($current_page - 1) . '">Prev</a> | ';
}

// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++) {
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page) {
        echo '<span class="btn btn-primary">' . $i . '</span> | ';
    } else {
        echo '<a class="btn btn-light" href="index.php?act=orderlist&page=' . $i . '">' . $i . '</a> | ';
    }
}

// nếu current_page < $total_page và total_page > 1 mới hiển thị nút Next
if ($current_page < $total_page && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=orderlist&page=' . ($current_page + 1) . '">Next</a> | ';
}
?>
            <!-- <form action="" method="post">

                <input type="submit" name="updateorder" value="">
            </form> -->

        </div>
    </div>
    <!-- <td><a href="./index.php?act=orderconfirm">Xác nhận đơn hàng</a> <a onclick="return confirm("Bạn có chắc muốn thực thi thao tác này!");" class="btn ' . $is_confirmed_class . '" href="./index.php?act=' . $confirm_or_delete . '&id=' . $order['id'] .
        '">' . $is_confirmed_action . '</a></td> -->

    <script>
    const selectStatusElement = document.querySelector('.status-selects');
    console.log(selectStatusElement);
    const updateOrderBtns = document.querySelectorAll('input[name="updateorderbtn"]');
    console.log(updateOrderBtns);
    [...updateOrderBtns].forEach((updateOrderBtn) => {
        updateOrderBtn.addEventListener('click', (e) => {
            // e.preventDefault();
            console.log('Hello clicked', e.target);
            const currentBtn = e.target;
            // const currentRow = getParent;
            // console.log('currentRow', currentRow);
            const currentRow = getParent(currentBtn, 'tr');
            const currentForm = getParent(currentBtn, 'form');
            // console.log('currentRow', currentRow);
            // console.log('currentRow', currentForm);
            const statusInputHidden = currentForm.querySelector('input[name="status"]')

            const currentSelectStatus = currentRow.querySelector('.status-selects');
            console.log('currentSelectStatus', currentSelectStatus.value);
            // console.log('currentSelectStatus', currentSelectStatus);
            statusInputHidden.value = currentSelectStatus.value;

        })
    })
    </script>

</body>



</html>