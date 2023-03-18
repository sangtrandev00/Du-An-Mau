<?php
// var_dump($user);
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $user = user_select_by_id($_GET['id']);
    // var_dump($user);
}

?>

<!-- Begin Page Content -->
<div class="container">
    <!-- Page Heading -->

    <a class="my-3 d-inline-block btn btn-outline-primary" href="./index.php?act=userlist">
        << Trở lại trang user</a>
            <h3 class="h3 mb-4 text-gray-800 bg-success text-white p-3">Cập nhật user</h1>
                <form id="edituserForm" class="pb-3" action="<?php echo "index.php?act=edituser&id=" . $_GET['id'] ?>"
                    method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="">Tên User: </label>
                        <input type="text" class="form-control" name="fullname" value="<?php echo $user['ho_ten'] ?>">
                        <p class="error-message"><?php echo isset($error['name']) ? $error['name'] : ''; ?></p>

                    </div>
                    <div class="form-group mb-3">
                        <label for="">Địa chỉ: </label>
                        <input type="text" class="form-control" name="address" value="<?php echo $user['diachi'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email: </label>
                        <input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>">
                        <p class="error-message"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>

                    </div>
                    <div class="form-group mb-3">
                        <label for="">Phone: </label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $user['sodienthoai'] ?>">
                        <p class="error-message"><?php echo isset($error['phone']) ? $error['phone'] : ''; ?></p>

                    </div>
                    <div class="form-group mb-3">
                        <label for="">kích hoạt: </label>
                        <input type="number" class="form-control" min=0 max=1 name="kichhoat"
                            value="<?php echo $user['kich_hoat'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Username: </label>
                        <input type="text" class="form-control" name="username"
                            value="<?php echo $user['tai_khoan'] ?>">
                        <p class="error-message"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>

                    </div>
                    <div class="form-group mb-3">
                        <label for="">Password: </label>
                        <input type="text" class="form-control" name="password" value="<?php echo $user['mat_khau'] ?>">
                        <p class="error-message"><?php echo isset($error['password']) ? $error['password'] : ''; ?></p>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Avatar hình ảnh: </label>
                        <input type="file" class="form-control" name="imageurl" value="">
                        <p class="error-message"><?php echo isset($error['img']) ? $error['img'] : ''; ?></p>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Vai trò </label>
                        <select name="role" class="form-select" aria-label="Default select example">
                            <option selected>Chọn vai trò</option>
                            <option value="1">Quản Trị Viên</option>
                            <option value="2">Nhân Viên</option>
                            <option value="3">Khách Hàng</option>
                        </select>
                    </div>
                    <input type="hidden" name="iduser" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];}?>">
                    <input type="submit" name="edituserbtn" value="Cập nhật" class="btn btn-primary mt-3" />
                </form>
</div>

<?php

?>

<script>

</script>