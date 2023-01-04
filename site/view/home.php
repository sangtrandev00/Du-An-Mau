<div class="content row">
    <div class="article col-9 ">
        <?php
include "./view/component/catalog.php";
?>

        <div class="product-list">
            <h3 class="product-list__title">Đồng hồ đeo tay</h3>
            <div class="row owl-carousel owl-theme">

                <?php
$productList = product_select_by_cate(9);
renderCard($productList);
?>
            </div>


        </div>

        <div class="product-list">
            <h3 class="product-list__title">Máy tính xách tay</h3>
            <div class="row owl-carousel owl-theme">

                <?php
$productList = product_select_by_cate(10);
renderCard($productList);
?>
            </div>
        </div>

        <div class="product-list">
            <h3 class="product-list__title">Máy ảnh</h3>
            <div class="row owl-carousel owl-theme">

                <?php
$productList = product_select_by_cate(11);
renderCard($productList);
?>

            </div>
        </div>

        <!-- Product list -->
        <div class="product-list">
            <h3 class="product-list__title mt-3">Điện thoại</h3>
            <div class="row owl-carousel owl-theme">

                <?php
$productList = product_select_by_cate(12);
renderCard($productList);
?>

            </div>
        </div>


        <div class="product-list">
            <h3 class="product-list__title">Phụ kiện</h3>
            <div class="row owl-carousel owl-theme">

                <?php
$productList = product_select_by_cate(13);
renderCard($productList);
?>

            </div>
        </div>
    </div>
    <div class="sidebar col-3">
        <?php
include "./view/component/sidebar.php";
?>
    </div>
</div>