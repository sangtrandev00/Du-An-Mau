<div class="row">
    <div class="col-6">
        <form id="forgotpassForm" action="./index.php?act=forgotpass" method="post" class="p-5 needs-validation"
            novalidate>
            <h1 class="h3 mb-3 fw-normal">Quên mật khẩu</h1>

            <div class="form-floating mt-2">
                <input name="username" type="text" class="form-control" required id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Tên đăng nhập</label>
                <!-- <div class="invalid-feedback">
                    Không để trống tên đăng nhập
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
            </div>
            <div class="form-floating mt-2">
                <input name="email" type="email" class="form-control" required id="floatingEmail" placeholder="email">
                <label for="floatingEmail">Email</label>
                <!-- <div class="invalid-feedback">
                    Không để trống email
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>
            </div>

            <input name="forgotpassbtn" class="w-100 btn btn-lg btn-primary mt-2" type="submit"
                value="Lấy lại mật khẩu">
            <!-- <a href="./index.php?act=forgotpass" class="mt-2 inline-block">Forgot Password?</a> -->
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </div>
</div>