<div class="table-responsive p-3">

    <div class="table-responsive p-3">
        <h3 class="bg-success p-3 text-uppercase">Thống kê hàng hóa từng loại</h3>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Loại hàng</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá cao nhất</th>
                    <th scope="col">Giá thấp nhất</th>
                    <th scope="col" colspan="2">Giá trung bình</th>
                </tr>
            </thead>
            <tbody>
                <?php
$list = report_list_select();
// var_export(report_list_select());

foreach ($list as $item) {
    // var_dump(select_min_max_avg_by_cateid($item['ma_danhmuc'])[0]);
    // $min = select_min_max_avg_by_cateid($item['ma_danhmuc'])[0]['min'];
    // $max = select_min_max_avg_by_cateid($item['ma_danhmuc'])[0]['max'];
    // $avg = select_min_max_avg_by_cateid($item['ma_danhmuc'])[0]['avg'];
    // $so_luong = count_number_cate_by_cateid($item['ma_danhmuc']);
    # code...
    echo '
    <tr class="">
    <td>
        ' . $item['tendm'] . '
    </td>
    <td scope="row">' . $item['so_luong'] . '</td>
    <td>' . $item['min'] . 'VND</td>
    <td>' . $item['max'] . ' VND</td>
    <td>' . $item['avg'] . ' VND</td>
</tr>
    ';
}

?>

                <!-- <tr class="">
                    <td>
                        Đòng hồ đeo tay
                    </td>
                    <td scope="row">13</td>
                    <td>$45</td>
                    <td>$23</td>
                    <td>$25</td>
                </tr>
                <tr class="">
                    <td>
                        Đòng hồ đeo tay
                    </td>
                    <td scope="row">13</td>
                    <td>$45</td>
                    <td>$23</td>
                    <td>$25</td>
                </tr>
                <tr class="">
                    <td>
                        Đòng hồ đeo tay
                    </td>
                    <td scope="row">13</td>
                    <td>$45</td>
                    <td>$23</td>
                    <td>$25</td>
                </tr> -->
            </tbody>
        </table>
        <div class="mt-3">
            <a href="./index.php?act=reportbycatechart" class="btn btn-primary">Xem biểu đồ</a>
            <a href="./index.php?act=reportlist" class="btn btn-primary">Xem danh sách các thống kê</a>
        </div>
    </div>