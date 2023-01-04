<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <div class="row d-flex justify-content-center ">
        <div class="col-6">
            <form id="signinForm" action="./index.php?act=signinpage" method="post"
                class="p-5 needs-validation shadow mt-5" novalidate>
                <h1 class="h3 mb-3 fw-normal">Quên mật khẩu</h1>

                <div class="form-floating mt-2">
                    <input type="text" name="username" class="form-control" required id="floatingInput" name="email"
                        placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                    <p class="error-message"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
                </div>
                <div class="form-floating mt-2">
                    <input type="email" class="form-control" required name="email" id="floatingPassword"
                        placeholder="Email">
                    <label for="floatingEmail">Email</label>
                    <!-- <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Không để trống mật khẩu
                </div> -->
                    <p class="error-message"><?php echo isset($error['email']) ? $error['password'] : ''; ?></p>
                </div>

                <input value="Lấy lại mật khẩu" name="loginbtn" class="w-100 btn btn-lg btn-primary" type="submit" />
                <a href="./loginpage.php" class="mt-2 inline-block">Đăng nhập</a>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            </form>
        </div>
    </div>
</body>

</html>