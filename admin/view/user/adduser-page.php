<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <a class="my-3 d-inline-block btn btn-outline-primary" href="./index.php?act=userlist">
        << Trở lại trang user</a>
            <h3 class="h3 mb-4 text-gray-800 bg-success text-white p-3">Thêm user</h1>
                <form id="adduserForm" class="pb-3" action="index.php?act=adduser" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên User: </label>
                        <input type="text" class="form-control" name="fullname" value="" required>
                        <p class="error-message"><?php echo isset($error['name']) ? $error['name'] : ''; ?></p>

                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ: </label>
                        <input type="text" class="form-control" name="address" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email: </label>
                        <input type="email" class="form-control" name="email" value="" required>
                        <p class="error-message"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>

                    </div>
                    <div class="form-group">
                        <label for="">Phone: </label>
                        <input type="text" class="form-control" name="phone" value="" required>
                        <p class="error-message"><?php echo isset($error['phone']) ? $error['phone'] : ''; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="">kích hoạt: </label>
                        <input type="number" class="form-control" min=0 max=1 name="kichhoat" value="1" required>
                    </div>
                    <div class="form-group">
                        <label for="">Username: </label>
                        <input type="text" class="form-control" name="username" value="" required>
                        <p class="error-message"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Password: </label>
                        <input type="password" class="form-control" name="password" value="" required>
                        <p class="error-message"><?php echo isset($error['password']) ? $error['password'] : ''; ?></p>

                    </div>
                    <div class="form-group">
                        <label for="">Avatar hình ảnh: </label>
                        <input type="file" class="form-control" name="imageurl" value="" required
                            accept="image/gif, image/jpeg, image/png">
                        <p class="error-message"><?php echo isset($error['img']) ? $error['img'] : ''; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Vai trò </label>
                        <select name="role" class="form-select" aria-label="Default select example">
                            <option selected>Chọn vai trò</option>
                            <option value="1">Quản Trị Viên</option>
                            <option value="2">Quản lý</option>
                            <option value="3">Nhân Viên</option>
                            <option value="4">Khách Hàng</option>
                        </select>
                    </div>
                    <input type="submit" name="adduserbtn" value="Thêm mới" class="btn btn-primary mt-3" />
                </form>
</div>