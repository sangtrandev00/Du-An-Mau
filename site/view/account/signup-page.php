<div class="row">
    <div class="col-6">
        <form id="signupForm" action="index.php?act=signuppage" method="post" class="p-5 ">

            <h1 class="h3 mb-3 fw-normal">Đăng ký tài khoản</h1>

            <div class="form-floating my-2">
                <input type="text" name="fullname" class="form-control" required id="floatingName"
                    placeholder="David Sang">
                <label for="floatingName">Full Name</label>
                <!-- <div class="invalid-feedback">
                    Không để trống họ tên
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?></p>
            </div>
            <div class="form-floating my-2">
                <input type="text" name="address" class="form-control" required id="floatingAddress"
                    placeholder="David Sang">
                <label for="floatingAddress">Home Address</label>
                <!-- <div class="invalid-feedback">
                    Không để trống địa chỉ nhà
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
            </div>
            <div class="form-floating my-2">
                <input type="text" name="phonenumber" class="form-control" required id="floatingPhone"
                    placeholder="David Sang">
                <label for="floatingPhone">Phone number</label>
                <!-- <div class="invalid-feedback">
                    Không để trống số điện thoại
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['phonenumber']) ? $error['phonenumber'] : ''; ?></p>

            </div>
            <div class="form-floating my-2">
                <input type="email" name="email" class="form-control" required id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                <!-- <div class="invalid-feedback">
                    Không để trống địa chỉ email
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>

            </div>
            <div class="form-floating my-2">
                <input type="text" name="username" class="form-control" required id="floatingUsername"
                    placeholder="David Sang">
                <label for="floatingUsername">User name</label>
                <!-- <div class="invalid-feedback">
                    Không để trống username
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>

            </div>
            <div class="form-floating my-2">
                <input type="password" name="password" class="form-control" required id="floatingPassword1"
                    placeholder="Password">
                <label for="floatingPassword1">Mật khẩu</label>
                <!-- <div class="invalid-feedback">
                    Không để trống mật khẩu
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['password']) ? $error['password'] : ''; ?></p>

            </div>
            <div class="form-floating my-2">
                <input type="password" name="reenterpass" class="form-control" required id="floatingPassword2"
                    placeholder="Password">
                <label for="floatingPassword2">Nhập lại mật khẩu</label>
                <!-- <div class="invalid-feedback">
                    Không để trống nhập lại mật khẩu
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div> -->
                <p class="error-message"><?php echo isset($error['reenterpass']) ? $error['reenterpass'] : ''; ?></p>

            </div>
            <!-- <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button> -->
            <input type="submit" name="signupbtn" class="w-100 btn btn-lg bg-primary mt-3" value="Đăng ký" />
            <!-- <a href="./index.php?act=forgotpass">Forgot Password?</a> -->
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </div>
</div>