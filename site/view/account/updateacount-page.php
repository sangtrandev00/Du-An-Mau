<?php
if (isset($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
    $user = user_select_by_id($iduser);
    $password = $user['mat_khau'];
}
?>

<div class="col-6">

    <form id="updateaccountForm" action="./index.php?act=updateaccount" method="post" class="p-3 needs-validation"
        enctype="multipart/form-data" novalidate>

        <h1 class="h3 mb-3 fw-normal">Cập nhật tài khoản</h1>

        <div class="form-floating mt-2">
            <input name="tai_khoan" type="text" class="form-control" required id="floatingInput"
                placeholder="name@example.com">
            <label for="floatingInput">Tên đăng nhập</label>
            <p class="error-message"><?php echo isset($error['tai_khoan']) ? $error['tai_khoan'] : ''; ?></p>
            <!-- <div class="invalid-feedback">
                Không để trống tên đăng nhập
            </div>
            <div class="valid-feedback">
                Looks good!
            </div> -->
        </div>
        <div class="form-floating mt-2">
            <input name="ho_ten" type="text" class="form-control" required id="floatingPass1" placeholder="Họ và tên">
            <label for="floatingPass1">Họ và tên</label>
            <!-- <div class="invalid-feedback">
                Không để trống họ tên
            </div>
            <div class="valid-feedback">
                Looks good!
            </div> -->
            <p class="error-message"><?php echo isset($error['ho_ten']) ? $error['ho_ten'] : ''; ?></p>

        </div>
        <div class="form-floating mt-2">
            <input name="diachi" type="text" class="form-control" required id="floatingAddress"
                placeholder="Địa chỉ nhà">
            <label for="floatingAddress">Địa chỉ nhà</label>
            <!-- <div class="invalid-feedback">
                Không để trống địa chỉ nhà
            </div>
            <div class="valid-feedback">
                Looks good!
            </div> -->
        </div>
        <div class="form-floating mt-2">
            <input name="sodienthoai" type="text" class="form-control" required id="floatingPhone"
                placeholder="Địa chỉ email">
            <label for="floatingPhone">Điện thoại</label>
            <!-- <div class="invalid-feedback">
                Không để trống điện thoại
            </div>
            <div class="valid-feedback">
                Looks good!
            </div> -->
            <p class="error-message"><?php echo isset($error['sodienthoai']) ? $error['sodienthoai'] : ''; ?></p>

        </div>
        <div class="form-floating mt-2">
            <input name="email" type="email" class="form-control" required id="floatingEmail"
                placeholder="Địa chỉ email">
            <label for="floatingEmail">Địa chỉ email</label>
            <!-- <div class="invalid-feedback">
                Không để trống email
            </div>
            <div class="valid-feedback">
                Looks good!
            </div> -->
            <p class="error-message"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>

        </div>
        <div class="form-floating mt-2">
            <input name="hinh_anh" type="file" class="form-control" required id="floatingImage" placeholder="">
            <label for="floatingImage">Hình</label>
            <!-- <div class="invalid-feedback">
                Không để trống hình ảnh
            </div>
            <div class="valid-feedback">
                Looks good!
            </div> -->
            <p class="error-message"><?php echo isset($error['hinh_anh']) ? $error['hinh_anh'] : ''; ?></p>

        </div>

        <input name="updateacountinfobtn" class="w-100 btn btn -lg btn-primary mt-2" type="submit" value="Cập nhật">
        <a href="./index.php?act=forgotpass" class="mt-2 inline-block">Forgot Password?</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
</div>

<div class="col-6">

    <h5 class="my-3">Hình đại diện</h5>
    <img src="<?php echo '../' . $user['hinh_anh'] ?>" alt="fsdf"
        style="width: 8rem; height: 8rem; object-fit: cover; border-radius: 50%" class="account-img">
    <h5 class="mt-3">Thông tin tài khoản: </h5>
    <ul>
        <li>
            Tên đăng nhập: <?php echo $user['tai_khoan']; ?>
        </li>
        <li>
            Họ tên: <?php echo $user['ho_ten']; ?>
        </li>
        <li>
            Địa chỉ: <?php echo $user['diachi']; ?>
        </li>
        <li>
            Điện thoại: <?php echo $user['sodienthoai']; ?>
        </li>
        <li>
            Email: <?php echo $user['email']; ?>
        </li>

    </ul>
</div>