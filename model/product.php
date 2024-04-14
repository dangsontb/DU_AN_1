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
function product_select_old(){
    $sql = "SELECT * FROM  product order by create_at";
    return pdo_query($sql);
}
function product_select_price_asc(){
    $sql = "SELECT *, (price-(price*sale)/100)  as price_sale  FROM  product
            order by price_sale";
    return pdo_query($sql);
}
function product_select_price_desc(){
    $sql = "SELECT *, (price-(price*sale)/100)  as price_sale  FROM  product
            order by price_sale desc";
    return pdo_query($sql);
}


function product_insert($name, $price, $image, $description, $sale,$product_quantity, $create_at, $view, $cate_id, $brand_id){
    $sql = "INSERT INTO product(name, price, image, description, sale,product_quantity, create_at, view, cate_id, brand_id) VALUES (?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$name, $price, $image, $description, $sale,$product_quantity, $create_at, $view, $cate_id, $brand_id);
}

function product_select_name($name){
    $sql = "SELECT * from product where name = ?";
    return pdo_query_one($sql,$name);
}

function product_select_by_id($product_id){
    $sql = "SELECT * from product  where product_id  = ? ";
    return pdo_query_one($sql, $product_id);
}


function product_update($product_id, $name, $price, $image, $description, $sale,$product_quantity, $create_at, $view, $cate_id, $brand_id){
    if($image != ''){
        $sql = "UPDATE product SET name=?,price=?,image=?,description=?,sale=?,product_quantity=?,create_at=?,view=?,cate_id=?,brand_id=? WHERE product_id =?";
        pdo_execute($sql,$name, $price, $image, $description, $sale,$product_quantity, $create_at, $view, $cate_id, $brand_id, $product_id);
    }else{
        $sql = "UPDATE product SET name=?,price=?,description=?,sale=?,product_quantity=?,create_at=?,view=?,cate_id=?,brand_id=? WHERE product_id =?";
        pdo_execute($sql,$name, $price,  $description, $sale,$product_quantity, $create_at, $view, $cate_id, $brand_id, $product_id);
    }
}
 function product_delele_by_id($product_id){
    if(is_array($product_id)){
        foreach ($product_id as $id) {
            $sql = "DELETE FROM product WHERE product_id = ?";
            pdo_execute($sql, $id);
        }
        
    }else  {
        $sql = "DELETE FROM product WHERE product_id = ?";
        pdo_execute($sql, $product_id);
    } 
   
 }

 function product_detail_id($product_id){
    $sql = "    SELECT p.*, c.cate_id, c.cate_name, b.brand_id, b.brand_name FROM product p 
                JOIN categories c ON p.cate_id = c.cate_id 
                JOIN brand b ON p.brand_id = b.brand_id 
                WHERE p.product_id =  ?"; 
    return pdo_query_one($sql,$product_id);
    
}
// Select ra số product trong trang
function product_select_pages($page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT * FROM  product order by product_id  limit $start, $quantity";
    return pdo_query($sql);
}

function product_select_page_old($page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT * FROM  product order by create_at  limit $start, $quantity";
    return pdo_query($sql);
}
function product_select_page_asc($page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT *, (price-(price*sale)/100)  as price_sale  FROM  product
            order by price_sale limit $start, $quantity";
    return pdo_query($sql);
}
function product_select_page_desc($page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT *, (price-(price*sale)/100)  as price_sale  FROM  product
            order by price_sale desc limit $start, $quantity";
    return pdo_query($sql);
}
function product_select_page_brand($brand_id ,$page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT *   FROM  product where brand_id  = ?
            limit $start, $quantity";
    return pdo_query($sql, $brand_id);
}
function product_select_page_category($cate_id ,$page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT *   FROM  product where cate_id  = ?
            limit $start, $quantity";
    return pdo_query($sql, $cate_id);
}
function product_select_page_keyword($keyw ,$page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT * FROM product 
            where name LIKE '%".$keyw."%' 
            limit $start, $quantity";
    return pdo_query($sql);
}


//======================================================= Ngát =====================================================================
function loadall_sanpham_home() {    
    // $sanpham_1trang =!empty( $_GET['sanpham_1trang'])? $_GET['sanpham_1trang']:3; 
    $sanpham_1trang = 9; 
    $trang=!empty( $_GET['trang'])? $_GET['trang']:1;
    $vitri_batdau = ($trang - 1) * $sanpham_1trang;

    $tong_sanpham = count_product();
    $tong_trang = ceil($tong_sanpham / $sanpham_1trang);
    if (isset($_GET['trang']) && is_numeric($_GET['trang']) && $_GET['trang'] > 0) {
        $trang_hientai = (int) $_GET['trang'];
        if ($trang_hientai > $tong_trang) {
            $trang_hientai = $tong_trang; // Giữ ở trang cuối nếu trang yêu cầu vượt quá giới hạn
        }
    }
    $sql = "SELECT * FROM `product`  ORDER BY product_id asc LIMIT $sanpham_1trang OFFSET $vitri_batdau";
    return pdo_query($sql);
}
function count_product(){
    return  pdo_query_value("SELECT COUNT(*) FROM product");
}

function loadall_sanpham_cate($keyw="",$cate_id=0){
    $sql="SELECT * FROM `product` WHERE 1";
    if($keyw!=""){
        $sql.=" AND product_name like '%".$keyw."%'";
    }
    if($cate_id>0){
        $sql.=" AND cate_id ='".$cate_id."'";
    }
    $sql.=" ORDER BY product_id DESC";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_name_cate($cate_id){
        $sql="SELECT * FROM `categories` WHERE cate_id=".$cate_id;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $cate_name;
}

function loadall_sanpham_brand($keyw="",$brand_id=0){
    $sql="SELECT * FROM `product` WHERE 1";
    if($keyw!=""){
        $sql.=" AND product.name like '%".$keyw."%'";
    }
    if($brand_id>0){
        $sql.=" AND brand_id ='".$brand_id."'";
    }
    $sql.=" ORDER BY product_id DESC";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_product_top10(){
    $sql="SELECT * FROM `product` WHERE 1 ORDER BY view DESC LIMIT 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


//======================================================= Hieu =====================================================================

function product_select_keyw($keyw){
    $sql = "SELECT p.*, c.cate_name, b.brand_name
            FROM product p
            JOIN categories c ON p.cate_id = c.cate_id
            JOIN brand b ON p.brand_id = b.brand_id where 1 ";
    if(isset($keyw)){
        // $sql .= " and p.name LIKE '%".$keyw."%' OR c.cate_name LIKE '%".$keyw."%' OR b.brand_name LIKE '%".$keyw."%  ";
        $sql .= " and p.name LIKE '%".$keyw."%'  ";
    }
    // $sql.=" ORDER BY p.product_id DESC";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
    


