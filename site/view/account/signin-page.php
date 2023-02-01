<div class="row justify-content-md-center">
    <div class="col-md-6">
        <form id="signinForm" action="./index.php?act=signinpage" method="post" class="p-5 needs-validation" novalidate>
            <h1 class="h3 mb-3 fw-normal">Đăng nhập vào trang</h1>

            <div class="form-floating mt-2">
                <input type="text" name="username" class="form-control" required id="floatingInput" name="email"
                    placeholder="name@example.com">
                <label for="floatingInput">Username</label>
                <p class="error-message"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" required name="password" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
                <!-- <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Không để trống mật khẩu
                </div> -->
                <p class="error-message"><?php echo isset($error['password']) ? $error['password'] : ''; ?></p>
            </div>

            <div class="checkbox mb-3 mt-2">
                <label>
                    <input type="checkbox" value="remember-me"> Ghi nhớ đăng nhập
                </label>
            </div>
            <input value="Đăng nhập" name="loginbtn" class="w-100 btn btn-lg btn-primary" type="submit" />
            <a href="./index.php?act=signuppage" class="w-100 btn btn-lg bg-secondary mt-3">Sign up</a>
            <a href="./index.php?act=forgotpass" class="mt-2 inline-block">Forgot Password?</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </div>
</div>