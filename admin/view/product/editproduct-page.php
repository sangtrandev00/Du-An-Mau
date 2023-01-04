<div class="add-product p-3">
    <h3 class="bg-success p-3 text-white">
        Chỉnh sửa sản phẩm
    </h3>
    <form id="editproductForm" action="./index.php?act=editproduct" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <label for="" class="label-form">Mã sản phẩm</label>
                <input type="text" name="idproduct" readonly id="" class="form-control" required
                    value="<?php if (isset($_GET['id'])) {echo $_GET['id'];}?>">
            </div>
            <input type="hidden" name="idproduct" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];}?>">
            <div class="col">
                <label for="" class="label-form">Tên sản phẩm</label>
                <input type="text" name="tensp" id="" class="form-control" required>
                <p class="error-message"><?php echo isset($error['proname']) ? $error['proname'] : ''; ?></p>
            </div>
            <div class="col">
                <label for="" class="label-form">Đơn giá</label>
                <input type="text" name="don_gia" id="" class="form-control" required>
                <p class="error-message"><?php echo isset($error['don_gia']) ? $error['don_gia'] : ''; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="label-form">Giảm giá</label>
                <input type="number" name="giam_gia" id="" class="form-control" required placeholder="Đơn vị %">
                <p class="error-message"><?php echo isset($error['giam_gia']) ? $error['giam_gia'] : ''; ?></p>
            </div>
            <div class="col">
                <label for="" class="label-form">Loại hàng</label>
                <!-- <input type="text" name="idproduct" id="" class="form-control" required> -->

                <select name="ma_danhmuc" class="form-select" aria-label="Default select example">
                    <option selected>Mở danh mục</option>
                    <?php
$cateList = cate_select_all();
foreach ($cateList as $cateItem) {
    # code...
    echo '
                        <option value="' . $cateItem['ma_danhmuc'] . '">' . $cateItem['ten_danhmuc'] . '</option>
                        ';
}
?>
                    <p class="error-message"><?php echo isset($error['ma_danhmuc']) ? $error['ma_danhmuc'] : ''; ?></p>
                </select>

            </div>
            <div class="col">
                <label for="" class="label-form">Hình ảnh 1</label>
                <div class="form-control" required>
                    <input type="file" name="hinhanh1" id="" class="">
                    <p class="error-message"><?php echo isset($error['hinhanh1']) ? $error['hinhanh1'] : ''; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="label-form">Hình ảnh 2</label>
                <div class="form-control" required>
                    <input type="file" name="hinhanh2" id="" class="">
                </div>
            </div>
            <div class="col">
                <label for="" class="label-form">Hình ảnh 3</label>
                <div class="form-control" required>
                    <input type="file" name="hinhanh3" id="" class="">
                </div>
            </div>
            <div class="col">
                <label for="" class="label-form">Hình ảnh 4</label>
                <div class="form-control" required>
                    <input type="file" name="hinhanh4" id="" class="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="label-form">Hàng đặc biệt</label>
                <div class="form-control" required>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Đặc biệt
                        </label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Bình thường
                        </label>
                    </div>
                </div>
            </div>
            <!-- <div class="col">
                <label for="" class="label-form">Ngày nhập</label>
                <input type="text" name="idproduct" id="" class="form-control" required>
            </div> -->
            <div class="col">
                <label for="" class="label-form">Số lượt xem</label>
                <input type="number" readonly name="view" value="0" id="" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Mô tả</label>
                <textarea class="form-control  requiredcol" name="mo_ta" id="" style=""></textarea>
            </div>
        </div>

        <div class="mt-3">
            <input class="btn btn-primary" type="submit" name="editproductbtn" value="Cập nhật">
            <input class="btn btn-primary" type="submit" value="Nhập lại">
            <a class="btn btn-primary" href="index.php?act=productlist">Danh sách</a>
        </div>
    </form>

</div>