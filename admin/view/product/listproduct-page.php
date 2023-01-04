<div class="table-responsive p-3">
    <h3 class="bg-success p-3 text-white">Tổng hợp danh sách sản phẩm</h3>
    <table class="table table-primary">
        <thead>
            <tr>
                <th></th>
                <th scope="col">Mã</th>
                <th scope="col">Tên</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Giảm giá</th>
                <th scope="col">Lượt xem</th>
                <th scope="col" colspan="2">Hành động</th>

            </tr>
        </thead>
        <tbody>

            <?php
$servername = "localhost";
$username = "asm_myclass";
$password = "trannhatsang10";

// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL
$conn = new PDO("mysql:host=$servername;dbname=duanmau_xshop", $username, $password);
// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$finalresult = $stmt->fetchAll();
$total_records = count($finalresult);

// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;

// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page) {
    $current_page = $total_page;
} else if ($current_page < 1) {
    $current_page = 1;
}

// Tìm Start
$start = ($current_page - 1) * $limit;

// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH SẢN PHẨM
// Có limit và start rồi thì truy vấn CSDL lấy danh sách SẢN PHẨM
$stmt2 = $conn->prepare("SELECT * FROM tbl_sanpham LIMIT $start, $limit");
$stmt2->execute();
$productList = $stmt2->fetchAll();

// $productList = product_select_all();
foreach ($productList as $productItem) {
    # code...
    echo '
    <tr class="">
    <td>
        <input type="checkbox" name="" id="">
    </td>
    <td  scope="row">' . $productItem['masanpham'] . '</td>
    <td style="width: 25rem;">' . $productItem['tensp'] . '</td>
    <td>' . $productItem['don_gia'] . '</td>
    <td>' . $productItem['giam_gia'] . '%</td>
    <td>' . $productItem['so_luot_xem'] . '</td>
    <td><a href="./index.php?act=editproduct&id=' . $productItem['masanpham'] . '" class="btn btn-primary">Sửa</a><a href="./index.php?act=deleteproduct&id=' . $productItem['masanpham'] . '"
            class="btn btn-danger mx-3">Xóa</a></td>
</tr>
    ';
}
?>
            <div class="pagination justify-content-lg-end pl-4 my-3">
                <?php
// PHẦN HIỂN THỊ PHÂN TRANG
// BƯỚC 7: HIỂN THỊ PHÂN TRANG

// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
if ($current_page > 1 && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=productlist&page=' . ($current_page - 1) . '">Prev</a> | ';
}

// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++) {
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page) {
        echo '<span class="btn btn-primary">' . $i . '</span> | ';
    } else {
        echo '<a class="btn btn-light" href="index.php?act=productlist&page=' . $i . '">' . $i . '</a> | ';
    }
}

// nếu current_page < $total_page và total_page > 1 mới hiển thị nút Next
if ($current_page < $total_page && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=productlist&page=' . ($current_page + 1) . '">Next</a> | ';
}

?>
        </tbody>
    </table>
    <div class="mt-3">
        <a href="" class="btn btn-primary">Chọn tất cả</a>
        <a href="" class="btn btn-primary">Bỏ chọn tất cả</a>
        <a href="" class="btn btn-primary">Xóa các mục chọn</a>
        <a href="./index.php?act=addproduct" class="btn btn-primary">Nhập thêm</a>
    </div>
</div>