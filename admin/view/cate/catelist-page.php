<div class="table-responsive p-3">
    <!-- <a href="./index.php?act=addcate" class="btn btn-success mb-3">Thêm danh mục</a> -->
    <h4 class="bg-success bg-gradient p-3 text-white">Danh sách danh mục hàng hóa</h3>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Mã</th>
                    <th scope="col">Tên loại</th>
                    <!-- <th scope="col">Đơn giá</th> -->
                    <th scope="col" colspan="2">Hành động</th>
                </tr>
            </thead>
            <tbody>

                <?php
$cateList = get_all_cates();
foreach ($cateList as $cateItem) {
    # code...
    echo '
    <tr class="">
    <td>
        <input type="checkbox" name="" id="">
    </td>
    <td scope="row">' . $cateItem['ma_danhmuc'] . '</td>
    <td>' . $cateItem['ten_danhmuc'] . '</td>
    <td><a href="./index.php?act=editcate&id=' . $cateItem['ma_danhmuc'] . '" class="btn btn-primary">Sửa</a><a href="./index.php?act=deletecate&id=' . $cateItem['ma_danhmuc'] . '"
            class="btn btn-danger mx-3">Xóa</a></td>
</tr>
    ';
}
?>

            </tbody>
        </table>
        <div class="mt-3">
            <a href="" class="btn btn-primary">Chọn tất cả</a>
            <a href="" class="btn btn-primary">Bỏ chọn tất cả</a>
            <a href="" class="btn btn-primary">Xóa các mục chọn</a>
            <a href="./index.php?act=addcate" class="btn btn-primary">Nhập thêm</a>
        </div>
</div>