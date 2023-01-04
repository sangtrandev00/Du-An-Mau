<?php
session_start();
include "./model/connectdb.php";
include "./model/user.php";
?>

<?php
$error = array();
if (isset($_POST['loginbtn']) && $_POST['loginbtn']) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    // Đối chiếu password

    if (empty($username)) {
        $error['username'] = "Không để trống username";
    }

    if (empty($password)) {
        $error['password'] = "Không để trống password";
    }

    if (!$error) {
        $islogined = checkuser($username, $password);
        if ($islogined === -1) {
            // $text_error = "username hoặc password không chính xác";

            echo '<div class="alert-warning alert"  style="">username hoặc password không chính xác</div>';
            // include "./view/login-page.php";
        } else {
            $kq = getuserinfo($username, $password);
            // var_dump($kq);
            $role = $kq[0]['vai_tro'];
            // echo $role;
            if ($role == 1) {
                // $_SESSION['role'] = $role;
                // $_SESSION['username'] = $kq[0]['user'];
                // $_SESSION['iduser'] = $kq[0]['id'];
                // header('location: admin/index.php');
                $_SESSION['role'] = $role;
                $_SESSION['username'] = $kq[0]['tai_khoan'];
                $_SESSION['iduser'] = $kq[0]['id'];
                // echo 'LOGIN SUCCESSFULLY!';
                header('location: index.php');
            } else {
                echo '<div class="alert-warning alert"  style="">username hoặc password không chính xác</div>';
            }
        }
        // header("location: ./index.php");
    }
}
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
            <form id="signinForm" action="./loginpage.php" method="post" class="p-5 needs-validation shadow mt-5"
                novalidate>
                <h1 class="h3 mb-3 fw-normal">Đăng nhập vào trang quản trị</h1>

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
                <a href="./forgot-pass-page.php" class="mt-2 inline-block">Forgot Password?</a>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            </form>
        </div>
    </div>
</body>

</html>