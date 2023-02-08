<div class="table-responsive p-3">
    <!-- <a href="./index.php?act=addcate" class="btn btn-success mb-3">Thêm danh mục</a> -->
    <h3 class="bg-success text-white p-3">Tổng hợp bình luận</h3>

    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Số bình luận</th>
                <th scope="col">Đã duyệt</th>
                <th scope="col">Mới nhất</th>
                <th scope="col" colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
$commentList = comment_select_groupby_product();
foreach ($commentList as $comment) {
    # code...

    $numberOfComment = count_comment_select_by_iduser($comment['ma_sanpham'])[0]['so_binhluan'];
    // var_dump($numberOfComment);
    echo '
    <tr class="">
    <td>
        <input type="checkbox" name="" id="">
    </td>
    <td scope="row">' . $comment['tensp'] . '</td>
    <td> ' . $numberOfComment . '</td>
    <td> ' . count_comment_has_approved($comment['ma_sanpham']) . '</td>
    <td>' . $comment['ngay_binhluan'] . '</td>
    <td><a href="./index.php?act=commentdetail&id=' . $comment['ma_sanpham'] . '" class="btn btn-primary px-3">Chi tiết</a></td>
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
        <!-- <a href="" class="btn btn-primary">Nhập thêm</a> -->
    </div>
</div>