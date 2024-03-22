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
    return pdo_query($sql);
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
function product_select_name($name){
    $sql = "SELECT * from product where name = ?";
    return pdo_query_one($sql,$name);
}
function product_select_by_id($product_id){
    $sql = "select * from product  as p where p.product_id  = ? ";
    return pdo_query_one($sql, $product_id);
}


function product_update($product_id, $name, $price, $image, $description, $sale, $create_at, $view, $cate_id, $brand_id){
    if($image != ''){
        $sql = "UPDATE product SET name=?,price=?,image=?,description=?,sale=?,create_at=?,view=?,cate_id=?,brand_id=? WHERE product_id =?";
        pdo_execute($sql,$name, $price, $image, $description, $sale, $create_at, $view, $cate_id, $brand_id, $product_id);
    }else{
        $sql = "UPDATE product SET name=?,price=?,description=?,sale=?,create_at=?,view=?,cate_id=?,brand_id=? WHERE product_id =?";
        pdo_execute($sql,$name, $price,  $description, $sale, $create_at, $view, $cate_id, $brand_id, $product_id);
    }
}
