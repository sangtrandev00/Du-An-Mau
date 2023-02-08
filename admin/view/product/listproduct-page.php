<?php
echo $_SESSION['filterbyprice'];
echo $_SESSION['filterbyname'];
// echo $_SESSION['filterbyprice'];

?>

<div class="table-responsive p-3">
    <h3 class="bg-success p-3 text-white">Tổng hợp danh sách sản phẩm</h3>
    <?php
if (isset($_GET['filterbyprice']) || isset($_GET['filterbyname']) || isset($_POST['searchbtn'])) {
    if (isset($_POST['countFilterResult'])) {

        $countFilterResult = $_POST['countFilterResult'];
        echo '<div class="count-result-filter "></div>';

    } else {
        echo '';
    }
}
?>
    <div class="filter my-3">
        <form action="./index.php?act=productlist" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <a href="" class="btn btn-primary select-all">Chọn tất cả</a>
                    <a href="" class="btn btn-primary unselect-all">Bỏ chọn tất cả</a>
                    <a href="" class="btn btn-primary delete-selected-items">Xóa các mục chọn</a>
                    <a href="./index.php?act=addproduct" class="btn btn-primary">Nhập thêm</a>
                </div>

                <div class="col-md-2">

                    <div class="mb-3">
                        <select class="form-select form-select-md filter-selects" name="" id="">
                            <option selected>Lọc sản phẩm</option>
                            <option value="1">Thứ tự chữ cái a - z</option>
                            <option value="2">Thứ tự chữ cái z - a</option>
                            <option value="3">Giá cao đến thấp</option>
                            <option value="4">Giá thấp đến cao</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row justify-content-around">
                        <input type="text" class="form-control col-6 w-50" name="searchname" id=""
                            placeholder="Tìm kiếm sản phẩm" value="">
                        <input class="btn btn-outline-secondary col-4 me-3" name="searchbtn" type="submit"
                            value="Tìm kiếm" name="search">
                    </div>
                </div>
            </div>
            <input type="hidden" class="total-records-search" name="countFilterResult" value="50">
        </form>
    </div>
    <div class="table-wrap d-flex flex-column-reverse">

        <table class="table table-primary">
            <thead>
                <tr>

                    <th></th>
                    <th scope="col">Mã</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Tồng kho</th>
                    <th scope="col">Giảm giá</th>
                    <th scope="col">Lượt xem</th>
                    <th scope="col" colspan="2">Hành động</th>

                </tr>
            </thead>
            <tbody>

                <?php

// PHẦN XỬ LÝ PHP
// B1: KET NOI CSDL
$conn = connectdb();

$sql = "SELECT * FROM tbl_sanpham"; // Total Product
$_limit = 6;

// FILTER & SEARCH HERE!!!
if (isset($_POST['searchbtn']) && $_POST['searchbtn']) {
    $search_value = $_POST['searchname'];
    // echo $search_value;
    $sql .= " WHERE tensp like '%$search_value%'";
    $_SESSION['q'] = $search_value;
}

if (isset($_GET['filterbyname']) && $_GET['filterbyname'] != "") {
    $filterbyname = $_GET['filterbyname'];
    $_SESSION['filterbyname'] = $filterbyname;
    $_SESSION['filterbyprice'] = "";
    // echo $filterbyname;
    if ($filterbyname == 'az') {
        $sql .= " ORDER BY tensp asc";
    }

    if ($filterbyname == 'za') {
        $sql .= " ORDER BY tensp desc";
    }
}

if (isset($_GET['filterbyprice']) && $_GET['filterbyprice'] != "") {
    $filterbyprice = $_GET['filterbyprice'];
    // echo $filterbyprice;
    $_SESSION['filterbyprice'] = $filterbyprice;
    $_SESSION['filterbyname'] = "";
    // echo $_SESSION['filterbyname'];
    // echo $_SESSION['filterbyprice'];
    // echo $filterbyprice;
    if ($filterbyprice == 'descrease') {
        $sql .= " ORDER BY don_gia desc";
    }

    if ($filterbyprice == 'increase') {
        $sql .= " ORDER BY don_gia asc";
    }
}

$pagination = createDataWithPagination($conn, $sql, $_limit);

// var_dump($pagination);

$productList = $pagination['datalist'];
// var_dump($productList);
$total_page = $pagination['totalpage'];
$start = $pagination['start'];
$current_page = $pagination['current_page'];
$total_records = $pagination['total_records'];
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
    <td>' . $productItem['ton_kho'] . '</td>
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

// Pagination with filter

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
    echo '<a class="btn btn-secondary" href="index.php?act=productlist' . $filterbyname . $filterbyprice . '&page=' . ($current_page - 1) . '">Prev</a> | ';
}

// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++) {
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page) {
        echo '<span class="btn btn-primary">' . $i . '</span> | ';
    } else {
        echo '<a class="btn btn-light" href="index.php?act=productlist' . $filterbyname . $filterbyprice . '&page=' . $i . '">' . $i . '</a> | ';
    }
}

// nếu current_page < $total_page và total_page > 1 mới hiển thị nút Next
if ($current_page < $total_page && $total_page > 1) {
    echo '<a class="btn btn-secondary" href="index.php?act=productlist' . $filterbyname . $filterbyprice . '&page=' . ($current_page + 1) . '">Next</a> | ';
}

?>
            </tbody>
        </table>


    </div>

    <form id="filterForm" class="" action="./index.php?act=productlist'" method="post">
        <input type="hidden" class="count-total-records" name="countFilterResult" value="<?php echo $total_records ?>">
    </form>

    <form id="deleteForm" action="./index.php?act=deleteproducts" method="post">
        <input type="hidden" class="id-checked-list" name="idCheckedList" value="">

    </form>

</div>

<script>
const filterSelects = document.querySelector('.form-select.filter-selects');
const totalRecords = document.querySelector('.count-total-records').value;
const totalRecordsSearch = document.querySelector('.total-records-search');
const searchBtn = document.querySelector('input[name="searchbtn"]');
searchBtn.addEventListener('click', (e) => {
    // e.preventDefault();
    // console.log(e.target, "clicked")
    totalRecordsSearch.value = totalRecords;
})


// console.log(totalRecords);

filterSelects.addEventListener('change', (e) => {
    console.log('clicked', e.target.value);
    const filterForm = document.getElementById('filterForm');
    const countResultFilter = document.querySelector('.count-result-filter');

    console.log(countResultFilter)
    console.log(filterForm);

    const filterValue = e.target.value;

    switch (filterValue) {
        case "1":
            filterForm.action = "./index.php?act=productlist&filterbyname=az";
            break;
        case "2":
            filterForm.action = "./index.php?act=productlist&filterbyname=za";
            break;
        case "3":
            filterForm.action = "./index.php?act=productlist&filterbyprice=descrease";
            break;
        case "4":
            filterForm.action = "./index.php?act=productlist&filterbyprice=increase";
            break;
        default:

    }

    filterForm.submit();

})


const table = document.querySelector('table.table');
// console.log(table);

const rows = document.querySelectorAll('tr');
// console.log('rows: ', rows);

const selectAllBtn = document.querySelector('.select-all');
const unSelectAllBtn = document.querySelector('.unselect-all');
console.log(selectAllBtn);
const firstTableDataList = document.querySelectorAll('td:first-child');
const firstSelectBoxList = document.querySelectorAll('td:first-child input[type="checkbox"]');

selectAllBtn.addEventListener('click', (e) => {
    e.preventDefault();
    // console.log(e.target, "clicked");

    firstSelectBoxList.forEach((checkbox) => {
        checkbox.checked = true;
    })
    // console.log(firstTableDataList);
    // console.log(firstSelectBoxList);

})

unSelectAllBtn.addEventListener("click", (e) => {
    e.preventDefault();

    firstSelectBoxList.forEach((checkbox) => {
        checkbox.checked = false;
    })
})

// btn btn-primary delete-selected-items

const deleteSelectedBtn = document.querySelector('.delete-selected-items');
// console.log(deleteSelectedBtn);

deleteSelectedBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const is_confirmed = confirm("Bạn có chắc muốn xóa sản phẩm chứ ?");
    if (!is_confirmed) {
        return;
    }
    // console.log(e.target);
    const idCheckedList = [];
    const idCheckedListElement = document.querySelector('.id-checked-list');
    const deleteForm = document.getElementById('deleteForm');
    firstSelectBoxList.forEach((checkbox) => {
        // console.log('checkbox', checkbox.checked);
        if (checkbox.checked) {
            const checkedRow = checkbox.parentElement.parentElement;
            // console.log('Hello selected', checkbox.parentElement);
            console.log(checkedRow);

            const selectedId = checkedRow.querySelector('td:nth-child(2)');
            console.log(selectedId.innerText);
            idCheckedList.push(selectedId.innerText);
        }
    })

    console.log(idCheckedList);
    idCheckedListElement.value = idCheckedList;
    deleteForm.submit();
})

const countResult = document.querySelector('.count-result-filter ');
document.addEventListener('DOMContentLoaded', () => {
    countResult.innerText = "Kết quả tìm kiếm được " + totalRecords + " sản phẩm";
})
</script>