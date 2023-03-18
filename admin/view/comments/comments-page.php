<div class="table-responsive p-3">
    <!-- <a href="./index.php?act=addcate" class="btn btn-success mb-3">Thêm danh mục</a> -->
    <h3 class="bg-success text-white p-3">Tổng hợp bình luận</h3>
    <div class="table-wrapper">

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
// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL
$conn = connectdb();

$sql = "SELECT bl.*, sp.tensp FROM tbl_binhluan bl JOIN tbl_sanpham sp ON sp.masanpham=bl.ma_sanpham group by bl.ma_sanpham order by bl.ngay_binhluan"; // Total Product
$_limit = 6;

$pagination = createDataWithPagination($conn, $sql, $_limit);

// var_dump($pagination);

$commentList = $pagination['datalist'];
// var_dump($productList);
$total_page = $pagination['totalpage'];
$start = $pagination['start'];
$current_page = $pagination['current_page'];
$total_records = $pagination['total_records'];

// $commentList = comment_select_groupby_product();
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

// Pagination with filter
echo "<div class='comments-pagination'>";

if (isset($_SESSION['filterbyname']) && $_SESSION['filterbyname'] != "") {
    $filterbyname = "&filterbyname=" . $_SESSION['filterbyname'];
} else {
    $filterbyname = "";
}

if (isset($_SESSION['filterbyprice']) && $_SESSION['filterbyprice'] != "") {
    $filterbyprice = "&filterbyprice=" . $_SESSION['filterbyprice'];
} else {
    $filterbyprice = "";
}

// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
if ($current_page > 1 && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=commentlist&page=' . ($current_page - 1) . '">Prev</a> | ';
}

// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++) {
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page) {
        echo '<span class="btn btn-primary">' . $i . '</span> | ';
    } else {
        echo '<a class="btn btn-light" href="index.php?act=commentlist&page=' . $i . '">' . $i . '</a> | ';
    }
}

// nếu current_page < $total_page và total_page > 1 mới hiển thị nút Next
if ($current_page < $total_page && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=commentlist&page=' . ($current_page + 1) . '">Next</a> | ';
}
echo "</div>";
?>

            </tbody>

        </table>
    </div>
    <div class="mt-3">
        <a href="" class="btn btn-primary">Chọn tất cả</a>
        <a href="" class="btn btn-primary">Bỏ chọn tất cả</a>
        <a href="" class="btn btn-primary">Xóa các mục chọn</a>
        <!-- <a href="" class="btn btn-primary">Nhập thêm</a> -->
    </div>


</div>