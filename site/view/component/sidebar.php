<div class="sidebar">
    <div class="list-group mt-3">
        <h4 class="bg-secondary p-3">Danh mục</h4>
        <?php
$cateList = cate_select_all();
foreach ($cateList as $cateItem) {
    # code...
    echo '
    <a href="./index.php?act=shoppage&cateid=' . $cateItem['ma_danhmuc'] . '" class="list-group-item list-group-item-action" aria-current="true">
    ' . $cateItem['ten_danhmuc'] . '
</a>
';

}
?>
        <!-- <a href="#" class="list-group-item list-group-item-action" aria-current="true">
            The current link item
        </a>
        <a href="#" class="list-group-item list-group-item-action">A second link item</a>
        <a href="#" class="list-group-item list-group-item-action">A third link item</a>
        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
        <a class="list-group-item list-group-item-action disabled">A disabled link item</a> -->
    </div>
    <div class="list-group mt-3">

        <h4 class="bg-secondary p-3">Top 10 yêu thích</h4>
        <?php
$topViewProductList = product_select_top(10);
foreach ($topViewProductList as $product) {
    # code...
    echo '
    <a href="./index.php?act=detailproductpage&id=' . $product['masanpham'] . '" class="list-group-item list-group-item-action">' . $product['tensp'] . ' <span class="badge bg-secondary">' . $product['so_luot_xem'] . ' view</span> </a>
    ';
}
?>
    </div>
    <!-- <div class="list-group mt-3">
        <h4 class="bg-secondary p-3">Danh mục</h4>
        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
            The current link item
        </a>
        <a href="#" class="list-group-item list-group-item-action">A second link item</a>
        <a href="#" class="list-group-item list-group-item-action">A third link item</a>
        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
        <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
    </div> -->
</div>