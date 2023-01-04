<div class="row">
    <div class="col-6">
        <form id="changepassForm" action="./index.php?act=changepass" method="post" class="p-5 needs-validation"
            novalidate>
            <h1 class="h3 mb-3 fw-normal">Đổi mật khẩu</h1>

            <div class="form-floating mt-2">
                <input name="newpass" type="password" class="form-control" required id="floatingPass1"
                    placeholder="Mật khẩu cũ">
                <label for="floatingPass1">Mật khẩu mới</label>
                <!-- <div class="invalid-feedback">
                    Hãy nhập mật khẩu mới
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['newpasss']) ? $error['newpass'] : ''; ?></p>

            </div>
            <div class="form-floating mt-2">
                <input name="renewpass" type="password" class="form-control" required id="floatingPass2"
                    placeholder="Mật khẩu mới">
                <label for="floatingPass2"> Nhập lại mật khẩu mới</label>
                <!-- <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Không để trống nhập lại mật khẩu
                </div> -->
                <p class="error-message"><?php echo isset($error['renewpass']) ? $error['renewpass'] : ''; ?></p>

            </div>

            <input name="updatepassbtn" class="w-100 btn btn -lg btn-primary mt-2" type="submit" value="Đổi mật khẩu">
            <a href="./index.php?act=forgotpass" class="mt-2 inline-block">Forgot Password?</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </div>
</div>

<?php

?>