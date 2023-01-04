<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Kết nối với chúng tôi thông qua các trang mạng xã hội: </span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                        Cửa hàng đồ thể thao chuyên phục vụ tận tình với đội ngũ trẻ trang đầy năng lượng
                    </p>
                    <p>
                        19/7c khu phố Đông Tác, phường Tân Đông Hiệp, thành phố Dĩ An, tỉnh Bình Dương
                    </p>
                    <p>
                        Email: intelsport22@gmail.com
                    </p>
                    <p>
                        số điện thoại: 0937988510
                    </p>
                    <p>
                        Mã số thuế: 8781905156
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Danh mục sản phẩm
                    </h6>
                    <?php
$cateList = cate_select_all();
foreach ($cateList as $cateItem) {
    # code...
    echo '
        <p>
        <a href="index.php?act=shoppage&cateid=' . $cateItem['ma_danhmuc'] . '" class="text-reset">' . $cateItem['ten_danhmuc'] . ' </a>
    </p>
        ';
}
?>
                    <!-- <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p> -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Các trang chính sách
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Chính sách bảo mật</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Chính sách vận chuyển</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Chính sách mua hàng</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Chính sách đổi trả</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">FAQ</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Để lại Email</h6>
                    <p>
                    <form action="" method="post">
                        <input type="email" name="" id="" class="form-control" placeholder="Email của bạn,...">
                        <input type="submit" class="btn btn-primary my-3" value="Đăng ký nhận ưu đãi">
                    </form>
                    </p>
                    <h4 class=" fw-bold mb-4">Fanpage cửa hàng</h4>
                    <!-- <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>

</div>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>
<!--Jquery Library  -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js'
    integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=='
    crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
<!-- Owlcarousel -->
<script src="./assets/js/owl.carousel.min.js">

</script>

<script src="./assets/js/jquery-ui.min.js">
</script>

<script src="./assets/js/common.js">

</script>

<script src="./assets/js/validate.js">

</script>


<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'contactpage':

            break;
        case 'intropage':

            break;
        case 'detailproductpage':
            echo '
            <script src="./assets/js/detailproduct.js">

            </script>
            ';
            break;
        case 'signuppage':

            break;
        case 'shoppage':
            echo '
            <script src="./assets/js/shoppage.js">

            </script>
            ';
            break;
        case 'updatecart':
        case 'viewcart':
        case 'deletecart':
        case 'addtocart':
            echo '
            <script src="./assets/js/shopcart.js">

            </script>
            ';
            break;
        case 'signinpage':

            break;
        case 'forgotpass':

            break;
        default:
            echo '
                <script src="./assets/js/homepage.js">

            </script>

                ';
    }
} else {
    echo '
    <script src="./assets/js/homepage.js">

    </script>

    ';
}
?>

</body>

</html>