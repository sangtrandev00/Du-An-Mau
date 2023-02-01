<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Dự Án Mẫu Site</title>

    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/carousel.css">
    <link rel="stylesheet" href="./assets/css/signin.css">
    <link rel="stylesheet" href="./assets/css/detailpage.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'contactpage':

            break;
        case 'intropage':

            break;
        case 'updatecart':
        case 'viewcart':
        case 'shopcartpage':
            echo `<link rel="stylesheet" href="./assets/css/shopcart-page.css">
																																																		        </link>`;
            break;
        case 'detailproductpage':
            echo '
            <link rel="stylesheet" href="./assets/css/detailpage.css">
           ';
            break;
        case 'signuppage':

            break;
        case 'shoppage':
            echo '

            ';
            break;
        case 'signinpage':

            break;
        case 'forgotpass':

            break;
        default:
            echo '

                ';
    }
} else {
    echo '


    ';
}
?>

    <?php

?>

</head>

<body>
    <div class="container-fluid">
        <header>
            <!-- place navbar here -->
            <nav class="navbar navbar-expand-sm navbar-light bg-light p-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">DAM SHOP</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="./index.php" aria-current="page">Trang chủ <span
                                        class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=intropage">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=contactpage">Liên hệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=shoppage">Cửa hàng</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Danh mục</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <?php
$cateList = cate_select_all();
foreach ($cateList as $cateItem) {
    # code...
    echo '
                                    <a class="dropdown-item" href="index.php?act=shoppage&cateid=' . $cateItem['ma_danhmuc'] . '">' . $cateItem['ten_danhmuc'] . '</a>';
}
?>

                                    <!-- <a class="dropdown-item" href="index.php?act=signinpage">Đồng hồ đeo tay</a>
                                    <a class="dropdown-item" href="index.php?act=signinpage">Máy tính xác tay</a>
                                    <a class="dropdown-item" href="index.php?act=signinpage">Máy ảnh</a>
                                    <a class="dropdown-item" href="index.php?act=signinpage">Điện thoại</a>
                                    <a class="dropdown-item" href="index.php?act=signinpage">Nước hoa</a>
                                    <a class="dropdown-item" href="index.php?act=signinpage">Nữ trang</a>
                                    <a class="dropdown-item" href="index.php?act=signinpage">Nón thời trang</a>
                                    <a class="dropdown-item" href="index.php?act=signinpage">Túi xác du lịch</a> -->

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=shoppage">Blog</a>
                            </li>
                            <li class="nav-item dropdown">

                                <?php
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
    $iduser = $_SESSION['iduser'];
    $user = user_select_by_id($iduser);
    // var_dump($user);
    $imgUrl = substr($user['hinh_anh'], 0, 4) == "http" ? $user['hinh_anh'] : "../" . $user['hinh_anh'];

    ?>
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"> <img src="<?php echo $imgUrl ?>"
                                        style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover" alt="">
                                    <?php echo $user['ho_ten'] ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="index.php?act=settingacountpage">Quản lý tài
                                        khoản</a>
                                    <a class="dropdown-item" href="index.php?act=logout">Đăng xuất</a>
                                    <?php

} else {

    ?>

                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý tài
                                        khoản</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="index.php?act=signinpage">Đăng nhập</a>
                                        <a class="dropdown-item" href="index.php?act=signuppage">Đăng ký</a>
                                        <a class="dropdown-item" href="index.php?act=forgotpass">Quên mật khẩu</a>

                                    </div>

                                    <?php
}
?>

                            </li>
                        </ul>
                        <form action="./index.php?act=shoppage" method="post" class="d-flex my-2 my-lg-0">

                            <input name="searchbtn" class="btn btn-outline-success my-2 my-sm-0 me-3" type="submit"
                                value="Tìm kiếm" />

                            <input name="searchbyname" placeholder="Tìm kiếm sản phẩm" class="form-control me-sm-2"
                                type="text">

                        </form>

                        <a href="./index.php?act=viewcart" type="button" class="btn btn-primary position-relative">
                            Giỏ hàng
                            <i class="fa-solid fa-cart-shopping"></i>

                            <span
                                class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="p-1"><?php echo count($_SESSION['giohang']) ?></span>
                            </span>

                        </a>
                    </div>
                </div>
            </nav>