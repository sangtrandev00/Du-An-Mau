<div class="table-responsive p-3">
    <h3 class="bg-success p-3 text-white">Quản lý quản trị viên</h3>
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Mã KH</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Địa chỉ Email</th>
                <th scope="col" colspan="">Hình ảnh</th>
                <th scope="col" colspan="">Vai trò</th>
                <th scope="col" colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
$adminList = admin_select(1, 2);
foreach ($adminList as $user) {
    $vaitro = '';

    if (isset($user['hinh_anh'])) {
        $imgUrl = substr($user['hinh_anh'], 0, 4) == 'http' ? $user['hinh_anh'] : "../" . $user['hinh_anh'];
    } else {
        $imgUrl = "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80";
    }

    switch ($user['vai_tro']) {
        case '1':
            # code...
            $vaitro = "Quản trị viên";
            break;
        case '2':
            # code...
            $vaitro = "Nhân viên";
            break;
        case '3':
            # code...
            $vaitro = "Khách hàng";
            break;
        case '4':
            # code...
            // $vaitro = "Khách hàng";
            break;
        default:
            # code...
            break;
    }

    echo '
    <tr class="">
    <td>
        <input type="checkbox" name="" id="">
    </td>
    <td scope="row">' . $user['id'] . '</td>
    <td>' . $user['ho_ten'] . '</td>
    <td>' . $user['email'] . '</td>
    <td><img width=100 height=100 style="object-fit: cover;" src="' . $imgUrl . '" /></td>
    <td>' . $vaitro . '</td>
    <td><a href="./index.php?act=edituser&id=' . $user['id'] . '" class="btn btn-primary">Sửa</a><a href="./index.php?act=deleteuser&id=' . $user['id'] . '"
            class="btn btn-danger mx-3">Xóa</a></td>
</tr>
    ';
}
?>

        </tbody>
    </table>
    <div class="mt-3">
        <a href="" class="btn btn-primary">Chọn tất cả</a>
        <a href="" class="btn btn-primary">Bỏ chọn tất cả</a>
        <a href="" class="btn btn-primary">Xóa các mục chọn</a>
        <a href="./index.php?act=adduser" class="btn btn-primary">Nhập thêm</a>
    </div>
</div>