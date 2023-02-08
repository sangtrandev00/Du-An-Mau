<?php
// var_dump($_SESSION['giohang']);

if (isset($_GET['id'])) {
    $idproduct = $_GET['id'];
    product_increase_view($idproduct);
    $product = product_select_by_id($idproduct);
    $ma_danhmuc = $product['ma_danhmuc'];
    $cate = cate_select_by_id($ma_danhmuc);
    $tendanhmuc = $cate['ten_danhmuc'];
    $newPrice = $product['don_gia'] * (100 - $product['giam_gia']) / 100;
    $newPriceFormat = number_format($product['don_gia'] * (100 - $product['giam_gia']) / 100);
    $img = $product['hinhanh1'];
    $name = $product['tensp'];
}

?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-5">
            <div class="main-img">
                <img class="img-fluid" src="<?php echo "../" . $product['hinhanh1'] ?>" alt="ProductS">
                <div class="row my-3 previews">
                    <div class="col-md-3">
                        <img class="w-100" src="<?php echo "../" . $product['hinhanh1'] ?>" alt="Sale">
                    </div>
                    <div class="col-md-3">
                        <img class="w-100" src="<?php echo "../" . $product['hinhanh2'] ?>" alt="Sale">
                    </div>
                    <div class="col-md-3">
                        <img class="w-100" src="<?php echo "../" . $product['hinhanh3'] ?>" alt="Sale">
                    </div>
                    <div class="col-md-3">
                        <img class="w-100" src="<?php echo "../" . $product['hinhanh4'] ?>" alt="Sale">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="main-description px-2">
                <form action="./index.php?act=addtocart" method="post">
                    <div class="category text-bold">
                        Category: <?php echo $tendanhmuc ?>
                    </div>
                    <p class="fz-1 mt-3">Số lượt xem: <?php echo $product['so_luot_xem'] ?></p>
                    <div class="product-title text-bold my-3">
                        <?php echo $product['tensp'] ?>
                    </div>


                    <div class="price-area my-4">
                        <p class="old-price mb-1"><del><?php echo $product['don_gia'] ?> VND</del>
                            <span class="old-price-discount text-danger">(<?php echo $product['giam_gia'] ?>%
                                off)</span>
                        </p>
                        <p class="new-price text-bold mb-1"><?php echo $newPriceFormat ?> VND</p>
                        <p class="text-secondary mb-1">(Additional tax may apply on checkout)</p>
                    </div>

                    <div class="quantity-remain">
                        <label for="" class="quantity-remain-text text-bold">Tồn kho:</label>
                        <span><?=$product['ton_kho']?></span>
                    </div>

                    <div class="buttons d-flex my-5">


                        <?php if ($product['ton_kho'] > 0) {
    ?>
                        <div class="block">
                            <a href="#" class="shadow btn custom-btn ">Wishlist</a>
                        </div>
                        <div class="block">
                            <input type="submit" name="addtocartbtn" class="shadow btn custom-btn"
                                value="Add to cart" />

                        </div>
                        <div class="block quantity">
                            <input type="number" class="form-control" id="cart_quantity" value="1" min="0" max="10000"
                                placeholder="Enter email" name="cart_quantity">
                            <input type="hidden" name="cart_quantity_hidden" value="">
                        </div>
                        <?php
} else {
    ?>
                        <div class="block alert alert-warning">Hết hàng</div>

                        <?php
}
?>


                    </div>

                    <input type="hidden" name="id" value="<?php echo $idproduct ?>">

                    <input type="hidden" name="tensanpham" value="<?php echo $name ?>">

                    <input type="hidden" name="iddm" value="<?php echo $ma_danhmuc ?>">

                    <input type="hidden" name="tendanhmuc" value="<?php echo $tendanhmuc ?>">

                    <input type="hidden" name="giasp" value="<?php echo $newPrice ?>">

                    <input type="hidden" name="img" value="<?php echo $img ?>">

                </form>


            </div>

            <div class=" product-details my-4">
                <p class="details-title text-color mb-1">Product Details</p>
                <p class="description"> <?php echo $product['mo_ta'] ?> </p>
            </div>
            <div class="product-details my-4">
                <p class="details-title text-color mb-2">Material & Care</p>
                <ul>
                    <li>Cotton</li>
                    <li>Machine-wash</li>
                </ul>
            </div>
            <div class="product-details my-4">
                <p class="details-title text-color mb-2">Sold by</p>
                <ul>
                    <li>Cotton</li>
                    <li>Machine-wash</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Comment section -->
<div class="row d-flex justify-content-center">
    <h4 class="comment-title">Bình luận đánh giá sản phẩm</h4>
    <div class="col-md-12 col-lg-12">
        <div class="card shadow-0 border" style="background-color: #f0f2f5;">
            <div class="card-body p-4">
                <div class="form-outline mb-4">
                    <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
                        <input type="text" id="addANote" name="comment" class="form-control col-12"
                            placeholder="Type comment..." />
                        <!-- <label class="form-label" for="addANote">+ Add a note</label> -->
                        <input class=" mt-2 btn btn-secondary" name="sendcommentbtn" type="submit"
                            value="Gửi bình luận">
                        <input type="hidden" name="masanpham" value="<?php echo $product['masanpham'] ?>">
                    </form>
                </div>

                <?php
$commentList = comment_select_by_product_has_approved($idproduct);
foreach ($commentList as $comment) {
    # code...
    $user = user_select_by_id($comment['ma_nguoidung']);
    $imgUrl = substr($user['hinh_anh'], 0, 4) == "http" ? $user['hinh_anh'] : "../" . $user['hinh_anh'];

    echo '
                    <div class="card mb-4">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                    <p>' . $comment['noi_dung'] . '</p>
                    <p>' . $comment['ngay_binhluan'] . '</p>
                </div>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <img src="' . $imgUrl . '" alt="avatar"
                                    width="25" height="25" />
                                <p class="small mb-0 ms-2">' . $user['ho_ten'] . '</p>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <p class="small text-muted mb-0">Upvote?</p>
                                <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                                <p class="small text-muted mb-0">3</p>
                            </div>
                        </div>
                    </div>
                </div>
                    ';
}
?>

            </div>
        </div>
    </div>
</div>

<div class="container similar-products my-4">
    <hr>
    <p class="display-5">Các sản phẩm tương tự</p>

    <div class="row owl-carousel owl-theme">
        <?php
$similarProductList = product_select_similar_cate($ma_danhmuc, $idproduct);
// foreach ($similarProductList as $productItem) {
//     # code...
//     $price = number_format($productItem['don_gia']);
//     echo '
//     <div class="similar-product">
//                 <img class="w-100" src="../' . $productItem['hinhanh1'] . '" alt="Preview">
//                 <a href="./index.php?act=detailproductpage&id=' . $productItem['masanpham'] . '" class="title">' . $productItem['tensp'] . '</a>
//                 <p class="price">$' . $price . '</p>
//             </div>
//     ';
// }
renderCard($similarProductList);

?>

    </div>
</div>

</div>

<script>

</script>