<div class="p-3">
    <h3 class="p-3 bg-success text-white">Sửa danh mục sản phẩm</h3>
    <form id="editcateForm" action="./index.php?act=updatecate" method="post">
        <div class="mb-3">
            <label for="idproduct" class="form-label">Mã loại hàng</label>
            <input type="text" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];}?>" readonly class="form-control"
                id="idproduct" aria-describedby="idproducthelp">
            <!-- <div id="idproducthelp" class="form-text">Please enter the product id</div> -->
        </div>
        <div class="mb-3">
            <label for="catename" class="form-label">Tên danh mục</label>
            <input type="text" name="catename" class="form-control" id="catename" required>
            <p class="error-message"><?php echo isset($error['catename']) ? $error['catename'] : ''; ?></p>
        </div>
        <input type="submit" name="editcatebtn" value="Lưu" class="btn btn-primary">
        <input type="submit" name="resetbtn" value="Nhập lại" class="btn btn-primary">
        <input type="hidden" name="madanhmuc" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];}?>">
        <a href="./index.php?act=catelist" class="btn btn-primary">Xem danh sách</a>
    </form>
</div>

<?php

?>