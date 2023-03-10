<?php

require_once "../pdo-library.php";

function cate_insert($ten_loai)
{
    $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
    pdo_execute($sql, $ten_loai);

}

function cate_update($ma_loai, $ten_danhmuc)
{
    $sql = "UPDATE tbl_danhmuc SET ten_danhmuc=? WHERE ma_danhmuc=?";
    pdo_execute($sql, $ten_danhmuc, $ma_loai);

}

function cate_delete($ma_loai)
{
    $sql = "DELETE FROM tbl_danhmuc WHERE ma_danhmuc=?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }

}

function cate_select_all()
{
    $sql = "SELECT * FROM tbl_danhmuc";
    return pdo_query($sql);

}

function cate_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM tbl_danhmuc WHERE ma_danhmuc=?";
    return pdo_query_one($sql, $ma_loai);

}

function cate_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM tbl_danhmuc WHERE ma_danhmuc=?";
    return pdo_query_value($sql, $ma_loai) > 0;

}
function cate_exist_by_name($ten_danhmuc)
{
    $sql = "SELECT count(*) FROM tbl_danhmuc WHERE ten_danhmuc=?";
    return pdo_query_value($sql, $ten_danhmuc) > 0;

}

function cate_select_join_on_product()
{
    $sql = "SELECT * from tbl_sanpham sp inner join tbl_danhmuc dm on sp.ma_danhmuc = dm.ma_danhmuc group by dm.ma_danhmuc";
    return pdo_query($sql);
}

function select_min_max_avg_by_cateid($ma_danhmuc)
{
    $sql = "select min(don_gia) as `min`, max(don_gia) as `max`, avg(don_gia) as `avg` from `tbl_sanpham` sp inner join `tbl_danhmuc` dm on sp.ma_danhmuc = dm.ma_danhmuc where dm.ma_danhmuc = ?";
    return pdo_query($sql, $ma_danhmuc);
}

function count_number_cate_by_cateid($ma_danhmuc)
{
    $sql = "select count(*) as `so_luong` from `tbl_sanpham` sp inner join `tbl_danhmuc` dm on sp.ma_danhmuc = dm.ma_danhmuc where dm.ma_danhmuc = ?;";
    return pdo_query($sql, $ma_danhmuc)[0]['so_luong'];
}

function report_list_select()
{
    $sql = "SELECT dm.ma_danhmuc as madm, dm.ten_danhmuc as tendm, count(sp.masanpham) as `so_luong`, avg(sp.don_gia) as `avg`, min(sp.don_gia) as `min`, max(sp.don_gia) as `max` from tbl_sanpham sp inner join tbl_danhmuc dm on sp.ma_danhmuc = dm.ma_danhmuc group by dm.ma_danhmuc";
    return pdo_query($sql);
}