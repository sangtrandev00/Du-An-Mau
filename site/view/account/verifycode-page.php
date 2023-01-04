<div class="row">
    <div class="col-6">
        <form action="./index.php?act=verifycode" method="post" class="p-5 needs-validation" novalidate>
            <h1 class="h3 mb-3 fw-normal">Nhập mã code đã được gửi đến email</h1>

            <div class="form-floating mt-2">
                <input type="text" name="code" class="form-control" id="floatingInput" placeholder="name@example.com"
                    required>
                <label for="floatingInput">Mã code</label>
                <div class="invalid-feedback">
                    Không để trống mã code
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <p class="error-message"><?php echo isset($error['code']) ? $error['code'] : ''; ?></p>
            </div>

            <input name="verifycodebtn" class="w-100 btn btn-lg btn-primary mt-2" type="submit"
                value="Lấy lại mật khẩu">
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </div>
</div>