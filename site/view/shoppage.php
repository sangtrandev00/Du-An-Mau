<?php
if (isset($_GET['cateid']) && $_GET['cateid'] > 0) {
    $cateid = $_GET['cateid'];
} else {
    $cateid = 0;
}

$minPrice = product_select_by_min_price();
$maxPrice = product_select_by_max_price();

//var_dump($minPrice[0]['min_don_gia']);

?>

<div class="row">
    <div class="col-3 search-sidebar py-4">
        <form action="./index.php?act=shoppage" method="post">
            <h3 class="search-title">Tìm kiếm của bạn</h3>
            <input type="text" class="form-control" name="searchbyname" id="" placeholder="">
            <input type="submit" class="btn btn-primary mt-3" name="searchbtn" value="Tìm kiếm">
        </form>
        <h3 class="mt-3">Lọc sản phẩm bởi</h3>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Danh mục sản phẩm
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="list-group">
                            <?php
$cateList = cate_select_all();
foreach ($cateList as $cateItem) {
    # code...
    echo '
    <a href="./index.php?act=shoppage&cateid=' . $cateItem['ma_danhmuc'] . '" class="list-group-item list-group-item-action">' . $cateItem['ten_danhmuc'] . '</a>
    ';
}
?>
                            <!-- <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                            <a class="list-group-item list-group-item-action disabled">A disabled link item</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Theo giá sản phẩm (VND)
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <form action="./index.php?act=shoppage" method="post">
                            <div id="slider-range" class="price-filter-range" name="rangeInput">

                            </div>
                            <div class="form-group my-3">
                                <input type="number" name="minPrice" min=0 max="99999999"
                                    oninput="validity.valid||(value='0');"
                                    value="<?php echo $minPrice[0]['min_don_gia'] ?>" id="min_price"
                                    class="price-range-field" />
                                <input type="number" min=0 max="100000000"
                                    oninput="validity.valid||(value='100000000');"
                                    value="<?php echo $maxPrice[0]['max_don_gia'] ?>" id="max_price" name="maxPrice"
                                    class="price-range-field" />
                            </div>
                            <input type="submit" name="priceRangeBtn" class="price-range-search btn btn-primary"
                                id="price-range-submit" value="Tìm kiếm">
                            <!-- <div id="searchResults" class="search-results-block"></div> -->

                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <!-- <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Theo lượt xem sản phẩm
                    </button>
                </h2> -->
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="sorting d-flex justify-content-end">
            <div class="sorting-bar dropdown">
                <div class="sorting-bar__text dropdown-toggle bg-warning p-2 mt-3" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Tìm kiếm theo mặc định
                </div>
                <ul class="sorting__list dropdown-menu">
                    <li class="sorting__item "><a href="./index.php?act=shoppage&sortbyprice=increase"
                            class="dropdown-item sorting__item-link">Thứ tự theo giá: Thấp
                            đến cao</a>
                    </li>
                    <li class="sorting__item"><a href="./index.php?act=shoppage&sortbyprice=descrease"
                            class="dropdown-item sorting__item-link">Thứ tự theo giá: Cao
                            đến thấp</a>
                    </li>
                    <li class="sorting__item"><a href="./index.php?act=shoppage&mostview"
                            class="dropdown-item sorting__item-link">Thứ tự theo lượt xem:
                            Nhiều nhất</a>
                    </li>
                    <li class="sorting__item"><a href="./index.php?act=shoppage&newest"
                            class="dropdown-item sorting__item-link">Thứ tự theo lượt xem:
                            Mới nhất</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="product-list row">
            <!-- PAGINATION function -->
            <?php

// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL

// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$sql = "SELECT * FROM tbl_sanpham";

// Case: Tìm kiếm theo tên

if (isset($_POST['searchbtn']) && $_POST['searchbtn']) {
    $pattern = $_POST['searchbyname'];
    $sql .= " WHERE tensp like '%$pattern%'";
}

// Case tìm kiếm theo danh mục
if (isset($_GET["cateid"])) {
    $cateid = $_GET["cateid"];
    $sql .= " WHERE ma_danhmuc =" . $cateid;
}

// Case: Tìm kiếm theo sắp xếp tăng dần
// Case: Tìm kiếm theo sắp xếp giảm dần

// Filter by price
if (isset($_GET['sortbyprice'])) {
    $sort_pattern = $_GET['sortbyprice'];

    // echo $sort_pattern;
    if ($sort_pattern == "increase") {
        $sql .= " ORDER BY don_gia";
    } else if ($sort_pattern == "descrease") {
        $sql .= " ORDER BY don_gia desc";
    }

}

// Case: Tìm kiếm theo lượt xem nhiều nhất

if (isset($_GET['mostview'])) {
    $sql .= " ORDER BY so_luot_xem desc";
}

// Case: Tìm kiếm theo lượt xem mới nhất

if (isset($_GET['newest'])) {
    $sql .= " ORDER BY ngay_nhap desc";
}

// Case: Tìm kiếm theo giá sản phẩm
if (isset($_POST['priceRangeBtn']) && $_POST['priceRangeBtn']) {

    $startprice = $_POST['minPrice'];
    $endprice = $_POST['maxPrice'];
    $sql .= " WHERE don_gia between '$startprice' and '$endprice'";

}

$total_records = totalRecords($sql);

// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 9;

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

// Có cần truy xuất thêm bước này không nhỉ ? -- Xem lại
// $sql = "SELECT * FROM tbl_sanpham";

// if (isset($_GET["cateid"])) {
//     $cateid = $_GET["cateid"];
//     $sql .= " WHERE ma_danhmuc =" . $cateid;
// }

// if (isset($_POST['searchbtn']) && $_POST['searchbtn']) {
//     $pattern = $_POST['searchbyname'];
//     $sql .= " WHERE tensp like '%$pattern%'";
// }

$sql .= " LIMIT $start, $limit";
// Có limit và start rồi thì truy vấn CSDL lấy danh sách SẢN PHẨM
$conn = connectdb();
$stmt = $conn->prepare($sql);
$stmt->execute();
$productList = $stmt->fetchAll();

// if ($_GET['act'] == 'searchproducts' && $_POST['searchbtn']) {
//     $productList = $searchProductList;
// }

// controller here

$filter = 1;

switch ($filter) {
    case '1':
        # code...
        break;

    default:
        # code...
        break;
}

// $productList = product_select_all(12);
renderCardShoppage($productList);
?>

        </div>

        <div class="pagination justify-content-lg-end pl-4 mt-3">
            <?php
// PHẦN HIỂN THỊ PHÂN TRANG
// BƯỚC 7: HIỂN THỊ PHÂN TRANG

// Nếu tổng số lượng sản phẩm > giới hạn sản phẩm trên 1 trang -> mới hiển thị pagination
if ($total_records > $limit) {

// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
    if ($current_page > 1 && $total_page > 1) {
        echo '<a  class="btn btn-pagination btn-secondary" href="index.php?act=shoppage&page=' . ($current_page - 1) . '">Prev</a> | ';
    }

// Lặp khoảng giữa
    for ($i = 1; $i <= $total_page; $i++) {
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
        if ($i == $current_page) {

            echo '<span class="btn btn-pagination btn-primary">' . $i . '</span> | ';
        } else {
            echo '<a class="btn btn-pagination btn-light" href="index.php?act=shoppage&page=' . $i . '">' . $i . '</a> | ';
        }
    }

// nếu current_page < $total_page và total_page > 1 mới hiển thị nút Next

    if ($current_page < $total_page && $total_page > 1) {
        echo '<a class="btn btn-pagination btn-secondary" href="index.php?act=shoppage&page=' . ($current_page + 1) . '">Next</a> | ';
    }
}
?>
        </div>
    </div>
</div>
</div>
</div>

<?php

?>