<?php

// echo $GLOBALS['changed_cart'];

if (isset($_SESSION['giohang'])) {
    $cartList = $_SESSION['giohang'];
    // var_dump($cartList);
    $flag = 0;
    foreach ($cartList as $cartItem) {
        $product = product_select_by_id($cartItem[0]);
        if ($cartItem[4] > $product['ton_kho']) {
            $flag = 1;
            break;
        }
    }

    if ($flag == 1) {
        echo '<div class="alert alert-danger text-center p-3">Số lượng sản phẩm trong giỏ hàng đã thay đổi, do lượng sản phẩm tồn kho không đủ. Vui lòng <a href="index.php?act=addtocart" class="btn btn-warning">tải lại</a> trang giỏ hàng</div>';
    } else {

        ?>

<main class="container p-5">
    <div class="text-center">
        <h2>Checkout form</h2>
    </div>

    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Giỏ hàng của bạn</span>
                <span class="badge bg-primary rounded-pill"><?php echo count($_SESSION['giohang']) ?></span>
            </h4>
            <ul class="list-group mb-3">
                <?php

        // Kiểm tra nếu có đủ số lượng trong kho trước

        $sum = 0;

        foreach ($cartList as $cartItem) {
            # code...
            $product = product_select_by_id($cartItem[0]);

            // Kiểm tra hàng tồn kho. Nếu số lượng đặt > hàng tồn. Gán số lượng = số lượng còn lại trong tồn kho.

            // echo $cartItem[0];

            $totalItem = $cartItem[3] * $cartItem[4];

            $sum += $totalItem;
            $priceFormatted = number_format($totalItem);
            echo '
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">' . $cartItem[1] . ' x ' . $cartItem[4] . '</h6>
                                <small class="text-muted">' . $cartItem[5] . '</small>
                            </div>
                            <span class="text-muted">' . $priceFormatted . ' VND</span>
                        </li>
                            ';
        }

        ?>

                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">−$0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (VND)</span>
                    <strong><span class="checkout-total"><?php echo number_format($sum) ?></span>VND</strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" required placeholder="Promo code">
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
            </form>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Địa chỉ đơn hàng</h4>
            <form id="checkoutForm" action="./index.php?act=checkout" class="needs-validation" novalidate method="post">
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="fullName" class="form-label">Tên đầy đủ</label>
                        <input type="text" name="fullname" class="form-control" required id="fullName" placeholder=""
                            value="" required>
                        <!-- <div class="invalid-feedback">
                            Valid first name is required.
                        </div> -->
                        <p class="error-message"><?php echo isset($error['ho_ten']) ? $error['ho_ten'] : ''; ?></p>
                    </div>

                    <div class="col-12">
                        <label for="phone" class="form-label">Phone number</label>
                        <div class="input-group has-validation">
                            <!-- <span class="input-group-text">@</span> -->
                            <input type="text" name="phonenumber" class="form-control" required id="phone"
                                placeholder="Phone number" required>
                            <!-- <div class="invalid-feedback">
                                Your Phone number is required.
                            </div> -->

                        </div>
                        <p class="error-message">
                            <?php echo isset($error['sodienthoai']) ? $error['sodienthoai'] : ''; ?></p>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" name="email" class="form-control" required id="email"
                            placeholder="you@example.com">
                        <!-- <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div> -->
                        <p class="error-message"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>

                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" required id="address"
                            placeholder="1234 Main St" required>
                        <!-- <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div> -->
                        <p class="error-message"><?php echo isset($error['diachi']) ? $error['diachi'] : ''; ?></p>

                    </div>

                    <div class="col-md-8">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" name="">
                            <option value="">Choose...</option>
                            <option>United States</option>
                            <option>Việt Nam</option>
                            <option>Singapore</option>
                        </select>
                        <!-- <div class="invalid-feedback">
                            Please select a valid country.
                        </div> -->
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <!-- <div class="invalid-feedback">
                            Zip code required.
                        </div> -->
                    </div>
                </div>

                <hr class="my-4">

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Shipping address is the same as my billing
                        address</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Save this information for next time</label>
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Payment</h4>

                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                            Name on card is
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="">
                        <div class="invalid-feedback">
                            Credit card number is
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="">
                        <div class="invalid-feedback">
                            Expiration date
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="">
                        <div class="invalid-feedback">
                            Security code
                        </div>
                    </div>
                </div>

                <hr class="my-4">
                <div class="form-floating">
                    <textarea name="ghichu" class="form-control" placeholder="Leave a comment here"
                        id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Ghi chú</label>
                </div>
                <hr class="my-4">
                <input type="hidden" name="tongdonhang" value="<?php echo $sum ?>" />

                <input name="checkoutbtn" class="w-100 btn btn-primary btn-lg" type="submit"
                    value="Continue to checkout" />
            </form>
        </div>
    </div>
</main>

<?php
}
}
?>