<?php
// session_start();
/*
 * Định nghĩa các url cần thiết được sử dụng trong website
 */
$ROOT_URL = "/xshop";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";

/*
 * Định nghĩa đường dẫn chứa ảnh sử dụng trong upload
 */
$IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/content/images";

/*
 * 2 biến toàn cục cần thiết để chia sẻ giữa controller và view
 */
$VIEW_NAME = "index.php";
$MESSAGE = '';

/**
 * Kiểm tra sự tồn tại của một tham số trong request
 * @param string $fieldname là tên tham số cần kiểm tra
 * @return boolean true tồn tại
 */
function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}
/**
 * Lưu file upload vào thư mục
 * @param string $fieldname là tên trường file
 * @param string $target_dir thư mục lưu file
 * @return tên file upload
 */
function save_file($fieldname, $target_dir)
{
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}
/**
 * Tạo cookie
 * @param string $name là tên cookie
 * @param string $value là giá trị cookie
 * @param int $day là số ngày tồn tại cookie
 */
function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/**
 * Xóa cookie
 * @param string $name là tên cookie
 */
function delete_cookie($name)
{
    add_cookie($name, '', -1);
}
/**
 * Đọc giá trị cookie
 * @param string $name là tên cookie
 * @return string giá trị của cookie
 */
function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}
/**
 * Kiểm tra đăng nhập và vai trò sử dụng.
 * Các php trong admin hoặc php yêu cầu phải được đăng nhập mới được
 * phép sử dụng thì cần thiết phải gọi hàm này trước
 **/
function check_login()
{
    global $SITE_URL;
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['vai_tro'] == 1) {
            return;
        }
        if (strpos($_SERVER["REQUEST_URI"], '/admin/') == false) {
            return;
        }
    }
    $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
    header("location: $SITE_URL/tai-khoan/dang-nhap.php");
}

function renderCard($productList)
{
    foreach ($productList as $productItem) {
        # code...
        $productSelectByCate = cate_select_by_id($productItem['ma_danhmuc']);
        $cateName = $productSelectByCate['ten_danhmuc'];
        $newPrice = $productItem['don_gia'] * (1 - $productItem['giam_gia'] / 100);
        echo '
        <div class="text-center">
                    <div class="card position-relative" style="">
                        <img src="../' . $productItem['hinhanh1'] . '"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-cate fz-5">Phân loại: ' . $cateName . '</p>
                            <h5 class="card-title">' . $productItem['tensp'] . '</h5>
                            <s class="mb-3 card-old-price">' . number_format($productItem['don_gia']) . ' VND</s>
                            <div class="card-price mb-3">
                            ' . number_format($newPrice) . ' VND
                            </div>
                            <a href="./index.php?act=detailproductpage&id=' . $productItem['masanpham'] . '" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                        <span class="card-discount position-absolute  translate-middle badge rounded-pill bg-danger p-2">
                           - ' . $productItem['giam_gia'] . ' %
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        <span class="card-view position-absolute badge rounded-pill bg-dark">' . $productItem['so_luot_xem'] . ' view</span>
                    </div>
                </div>
        ';
    }
}

function renderCardShoppage($productList)
{
    foreach ($productList as $productItem) {
        # code...
        $productSelectByCate = cate_select_by_id($productItem['ma_danhmuc']);
        $cateName = $productSelectByCate['ten_danhmuc'];
        $newPrice = $productItem['don_gia'] * (1 - $productItem['giam_gia'] / 100);
        echo '
        <div class="product-item col-4">
        <div class="text-center">
                    <div class="card position-relative" style="">
                        <img src="../' . $productItem['hinhanh1'] . '"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-cate fz-5">Phân loại: ' . $cateName . '</p>
                            <h5 class="card-title">' . $productItem['tensp'] . '</h5>
                            <s class="mb-3 card-old-price">' . number_format($productItem['don_gia']) . ' VND</s>
                            <div class="card-price mb-3">
                            ' . number_format($newPrice) . ' VND
                            </div>
                            <a href="./index.php?act=detailproductpage&id=' . $productItem['masanpham'] . '" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                        <span class="card-discount position-absolute  translate-middle badge rounded-pill bg-danger p-2">
                           - ' . $productItem['giam_gia'] . ' %
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        <span class="card-view position-absolute badge rounded-pill bg-dark">' . $productItem['so_luot_xem'] . ' view</span>
                    </div>
                </div>
        </div>
        ';
    }
}

function validating($phone)
{
    if (preg_match('/^[0-9]{10}+$/', $phone)) {
        return true;
    } else {
        return false;
    }
}

function is_email($str)
{
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? false : true;
}

function validateUploadImage($fileName)
{
//     $check = getimagesize($_FILES["$fileName"]["tmp_name"]);
    //     if ($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }

// // Check if file already exists
    //     if (file_exists($target_file)) {
    //         echo "Sorry, file already exists.";
    //         $uploadOk = 0;
    //     }

// // Check file size
    //     if ($_FILES["$fileName"]["size"] > 500000) {
    //         echo "Sorry, your file is too large.";
    //         $uploadOk = 0;
    //     }

// // Allow certain file formats
    //     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //         && $imageFileType != "gif") {
    //         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //         $uploadOk = 0;
    //     }

// // Check if $uploadOk is set to 0 by an error
    //     if ($uploadOk == 0) {
    //         echo "Sorry, your file was not uploaded.";
    //         // if everything is ok, try to upload file
    //     } else {
    //         if (move_uploaded_file($_FILES["$fileName"]["tmp_name"], $target_file)) {
    //             echo "The file " . htmlspecialchars(basename($_FILES["$fileName"]["name"])) . " has been uploaded.";
    //         } else {
    //             echo "Sorry, there was an error uploading your file.";
    //         }
    //     }

}