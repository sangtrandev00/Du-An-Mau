<?php
if (isset($_GET['id'])) {
    $ma_sanpham = $_GET['id'];
    $sanpham = product_select_by_id($ma_sanpham);

    $commentList = comment_select_by_product($ma_sanpham);
    ?>

<div class="table-responsive p-3">
    <!-- <a href="./index.php?act=addcate" class="btn btn-success mb-3">Thêm danh mục</a> -->
    <h3 class="bg-success p-3">Chi tiết bình luận</h3>
    <p class="p-2 fs-3">Sản phẩm: <?php echo $sanpham['tensp'] ?></p>
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ngày bình luận</th>
                <th scope="col">Người bình luận</th>
                <th scope="col" colspan="2">Hành động</th>

            </tr>
        </thead>
        <tbody>
            <?php

    // var_dump($commentList);
    foreach ($commentList as $comment) {
        # code...
        $product = product_select_by_id($comment['ma_sanpham']);
        $user = user_select_by_id($comment['ma_nguoidung']);
        // var_dump($user);
        echo '
        <tr class=" ">
        <td>
            <input type="checkbox" name="" id="">
        </td>
        <td scope="row">' . $comment['noi_dung'] . '</td>
        <td>' . $comment['ngay_binhluan'] . '</td>
        <td>' . $user['ho_ten'] . '</td>
        <td><a href="./index.php?act=deletecomment&id=' . $comment['ma_binhluan'] . '&idproduct=' . $ma_sanpham . '" class="btn btn-danger px-3">Xóa</a></td>
    </tr>
        ';
    }
}
?>
            <!-- <tr class=" ">
                <td>
                    <input type="checkbox" name="" id="">
                </td>
                <td scope="row">Đồng hồ đeo tay</td>
                <td>2018-04-24</td>
                <td>2018-04-24</td>
                <td><a href="./index.php?act=editproduct" class="btn btn-danger px-3">Xóa</a></td>
            </tr>
            <tr class=" ">
                <td>
                    <input type="checkbox" name="" id="">
                </td>
                <td scope="row">Đồng hồ đeo tay</td>
                <td>2018-04-24</td>
                <td>2018-04-24</td>
                <td><a href="./index.php?act=editproduct" class="btn btn-danger px-3">Xóa</a></td>
            </tr>
            <tr class=" ">
                <td>
                    <input type="checkbox" name="" id="">
                </td>
                <td scope="row">Đồng hồ đeo tay</td>
                <td>2018-04-24</td>
                <td>2018-04-24</td>
                <td><a href="./index.php?act=editproduct" class="btn btn-danger px-3">Xóa</a></td>
            </tr> -->

        </tbody>
    </table>
    <div class="mt-3">
        <a href="" class="btn btn-primary">Chọn tất cả</a>
        <a href="" class="btn btn-primary">Bỏ chọn tất cả</a>
        <a href="" class="btn btn-primary">Xóa các mục chọn</a>
        <a href="./index.php?act=commentlist" class="btn btn-primary">Xem danh sách bình luận</a>
    </div>
</div>