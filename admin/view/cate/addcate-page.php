<div class="p-3">
    <h3 class="p-3 text-white bg-success">Thêm danh mục</h3>
    <form id="addcateForm" action="./index.php?act=addcate" method="post">
        <div class="mb-3">
            <label for="idproduct" class="form-label">Mã loại hàng</label>
            <input type="text" readonly class="form-control" id="idproduct" aria-describedby="idproducthelp"
                placeholder="auto increment number">
            <!-- <div id="idproducthelp" class="form-text">Please enter the product id</div> -->
        </div>
        <div class="mb-3">
            <label for="cateprodut" class="form-label">Tên danh mục</label>
            <input type="text" name="catename" class="form-control" id="cateprodut" required>
            <p class="error-message"><?php echo isset($error['catename']) ? $error['catename'] : ''; ?></p>
        </div>
        <input type="submit" name="addcatebtn" value="Lưu" class="btn btn-primary">
        <input type="submit" name="resetbtn" value="Nhập lại" class="btn btn-primary">
        <a href="./index.php?act=catelist" class="btn btn-primary">Xem danh sách</a>
    </form>
</div>