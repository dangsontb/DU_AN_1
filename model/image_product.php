<?php

function image_product_insert($product_id , $img){
    $sql = "SELECT * FROM image_product(product_id, img) values(?,?)";
    pdo_execute($sql, $product_id , $img);
}
