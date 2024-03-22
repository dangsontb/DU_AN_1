<?php

function product_select_all(){
    $sql = "SELECT *  FROM product";
    return pdo_query($sql);
}

function product_select_by_categories($cate_id){
    $sql = "select p*  from product p join categories c on p.cate_id = c.cate_id where p.cate_id = ?";
    return pdo_query($sql,$cate_id);
}
function product_select_by_brand($brand_id){
    $sql = "select p*  from product p join brand b on p.brand_id = b.brand_id where p.brand_id = ?";
    return pdo_query($sql,$brand_id);
}
function product_select_full(){
    $sql = "select p*, c.cate_id, c.cate_name, b.brand_id , b.brand_name  from product p join categories c on p.cate_id = c.cate_id
                                    join brand b on p.brand_id = b.brand_id  ";
}

function product_insert($name, $price, $image, $description, $sale, $create_at, $view, $cate_id, $brand_id){
    $sql = "INSERT INTO product(name, price, image, description, sale, create_at, view, cate_id, brand_id) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$name, $price, $image, $description, $sale, $create_at, $view, $cate_id, $brand_id);
}

function loadall_sanpham_home(){
    $sql="SELECT * FROM `product` WHERE 1 ORDER BY product_id DESC LIMIT 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}