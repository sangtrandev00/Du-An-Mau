<!-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
            lists, etc.
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</div> -->

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
    id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">

    <div class="sidebar">
        <div class="flex-shrink-0 p-3 bg-light shadow-lg sidebar__container d-flex flex-column " style="width: 280px;">
            <div class="offcanvas-header border-bottom">
                <a id="offcanvasScrollingLabel" href="./index.php"
                    class="offcanvas-title d-flex align-items-center  link-dark text-decoration-none  ">
                    <svg class="bi me-2" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-5 fw-semibold">DAM Shop</span>
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="true">
                        Home
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="./index.php" class="link-dark  rounded">Tổng quan</a></li>
                            <li><a href="./index.php?act=news" class="link-dark  rounded">Cập nhật tin tức</a></li>
                            <li><a href="./index.php?act=reportlist" class="link-dark  rounded">Thống kê</a></li>
                        </ul>
                    </div>
                </li>
                <!-- <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                    data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Dashboard
                </button>
                <div class="collapse" id="dashboard-collapse">
                    <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark  rounded">Overview</a></li>
                        <li><a href="#" class="link-dark  rounded">Weekly</a></li>
                        <li><a href="#" class="link-dark  rounded">Monthly</a></li>
                        <li><a href="#" class="link-dark  rounded">Annually</a></li>
                    </ul>
                </div>
            </li> -->
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                        data-bs-target="#menu-collapse" aria-expanded="false">
                        Menu
                    </button>
                    <div class="collapse" id="menu-collapse">
                        <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="index.php?act=catelist" class="link-dark  rounded">Danh mục</a></li>
                            <li><a href="index.php?act=productlist" class="link-dark  rounded">Sản phẩm</a></li>
                            <li><a href="index.php?act=commentlist" class="link-dark  rounded">Bình luận</a></li>
                            <!-- <li><a href="index.php?act=userlist" class="link-dark  rounded">Userlist</a></li> -->
                            <li><a href="index.php?act=orderlist" class="link-dark  rounded">Đơn hàng</a></li>
                            <li><a href="index.php?act=discountlist" class="link-dark  rounded">Mã giảm giá</a></li>
                            <!-- <li><a href="#" class="link-dark  rounded">Monthly</a></li>
                        <li><a href="#" class="link-dark  rounded">Annually</a></li> -->
                        </ul>
                    </div>
                </li>

                <!-- Authorize section -->
                <?php
if (isset($_SESSION) && $_SESSION['iduser']) {
    $iduser = $_SESSION['iduser'];
    $user = user_select_by_id($iduser);
    // echo $user['vai_tro'];
    if ($user['vai_tro'] == 1) {

        ?>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                        data-bs-target="#authorize-collapse" aria-expanded="false">
                        Quản lý người dùng
                    </button>
                    <div class="collapse" id="authorize-collapse">
                        <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="index.php?act=userlist" class="link-dark  rounded">Quản trị viên</a></li>
                            <li><a href="index.php?act=customerlist" class="link-dark  rounded">Khách hàng</a></li>
                            <li><a href="index.php?act=adduser" class="link-dark  rounded">Thêm người dùng</a></li>
                            <!-- <li><a href="index.php?act=productlist" class="link-dark  rounded">Products</a></li>
                            <li><a href="index.php?act=commentlist" class="link-dark  rounded">Comments</a></li>
                            <li><a href="index.php?act=userlist" class="link-dark  rounded">Userlist</a></li>
                            <li><a href="index.php?act=orderlist" class="link-dark  rounded">Orders</a></li> -->
                            <!-- <li><a href="#" class="link-dark  rounded">Monthly</a></li>
                        <li><a href="#" class="link-dark  rounded">Annually</a></li> -->
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                        data-bs-target="#blog-collapse" aria-expanded="false">
                        Quản lý bài viết
                    </button>

                    <div class="collapse" id="blog-collapse">
                        <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="index.php?act=bloglist" class="link-dark  rounded">Tất cả bài viết</a></li>
                            <li><a href="index.php?act=addblog" class="link-dark  rounded">Bài viết mới</a></li>
                            <!-- <li><a href="#" class="link-dark  rounded">Annually</a></li> -->
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                        data-bs-target="#request-collapse" aria-expanded="false">
                        Yêu cầu khách hàng
                    </button>

                    <div class="collapse" id="request-collapse">
                        <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="index.php?act=bloglist" class="link-dark  rounded">Các yêu cầu</a></li>
                            <!-- <li><a href="index.php?act=addblog" class="link-dark  rounded">Bài viết mới</a></li> -->
                            <!-- <li><a href="#" class="link-dark  rounded">Annually</a></li> -->
                        </ul>
                    </div>
                </li>
                <?php
}
}
?>

                <!-- <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse" aria-expanded="false">
                        Orders
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark  rounded">New</a></li>
                            <li><a href="#" class="link-dark  rounded">Processed</a></li>
                            <li><a href="#" class="link-dark  rounded">Shipped</a></li>
                            <li><a href="#" class="link-dark  rounded">Returned</a></li>
                        </ul>
                    </div>
                </li> -->
                <li class="border-top my-3"></li>
                <!-- <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#account-collapse" aria-expanded="false">
                    Account
                </button>
                <div class="collapse" id="account-collapse">
                    <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark  rounded">New...</a></li>
                        <li><a href="#" class="link-dark  rounded">Profile</a></li>
                        <li><a href="#" class="link-dark  rounded">Settings</a></li>
                        <li><a href="#" class="link-dark  rounded">Sign out</a></li>
                    </ul>
                </div>
            </li> -->
            </ul>
            <!-- <div class="dropdown mt-auto">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div> -->
        </div>
    </div>
</div>