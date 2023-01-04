<?php
// var_dump($_SESSION['giohang']);

if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
    $numberOfCart = count($_SESSION['giohang']);
    ?>

<div class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted"> <?php echo $numberOfCart ?> items</h6>
                                    </div>
                                    <form action="./index.php?act=updatecart" method="post">
                                        <?php

    $cartList = $_SESSION['giohang'];
    $i = 0;
    $sum = 0;
    $count = 0;
    foreach ($cartList as $cartItem) {
        # code...
        $priceFormatted = number_format($cartItem[3]);
        $totalCartItem = $cartItem[3] * $cartItem[4];
        // $totalCartItemFormat = number_format($totalCartItem);
        $sum += $totalCartItem;
        echo '
                                            <hr class="my-4">

                                            <div class="row cart-row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="../' . $cartItem[2] . '"
                                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">' . $cartItem[5] . '</h6>
                                                    <h6 class="text-black mb-0">' . $cartItem[1] . '</h6>
                                                    <h6 class="text-warning mb-0 text-underline price-item-wrap"> <i>Giá sp:</i> <span class="price-item">' . $priceFormatted . '</span> VND</h6>
                                                    <input type="hidden" name="" class="price-item-input" value="' . $cartItem[3] . '">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <span class="btn btn-link px-2"
                                                        onclick="plusQuantity(-1)">
                                                        <i class="fas fa-minus"></i>
                                                    </span>

                                                    <input id="form1" min="0" name="quantity" value="' . $cartItem[4] . '" type="number"
                                                        class="quantity-input form-control form-control-sm" />

                                                    <span class="btn btn-link px-2"
                                                        onclick="plusQuantity(1)">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0"> <span class="row-price">' . number_format($totalCartItem) . '</span> VND</h6>
                                                    <input type="hidden" class="row-price-input" name="" value="' . $totalCartItem . '">
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="./index.php?act=deletecart&idcart=' . $i . '" class="text-muted"><i class="fas fa-times"></i></a>
                                                </div>
                                                <input type="hidden" class="quantity-hidden-item" name="qtyhidden[]" value="' . $cartItem[4] . '">
                                            </div>

                                            ';
        $i++;
    }
    ?>

                                        <div class="pt-5">
                                            <div class="mb-0 d-flex justify-content-between align-items-center"><a
                                                    href="#!" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to
                                                    shop</a>
                                                <input type="submit" name="updatecartbtn" class="btn btn-primary"
                                                    value="Cập nhật giỏ hàng" />
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">items <?php echo $numberOfCart ?></h5>
                                        <h5 class="subtotal">
                                            <span><?php echo number_format($totalCartItem); ?></span>VND
                                        </h5>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Shipping</h5>

                                    <div class="mb-4 pb-2">
                                        <select class="select">
                                            <option value="1">Standard-Delivery- 5.00VND</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                        </select>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Give code</h5>

                                    <div class="mb-5">
                                        <div class="form-outline">
                                            <input type="text" id="form3Examplea2"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Examplea2">Enter your code</label>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Total price</h5>
                                        <h5 class="final-total"> <span><?php echo number_format($sum + 5) ?></span> VND
                                        </h5>
                                    </div>

                                    <a href="./index.php?act=checkoutpage" type=" button"
                                        class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Thanh
                                        toán</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
} else {
    echo '<div class="alert alert-danger text-center py-3">Giỏ hàng rỗng </div>';
}
?>