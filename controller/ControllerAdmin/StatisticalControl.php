<?php
    function  selling_products(){
        $title = "   Lượt mua sản phẩm";
        $list_selling_products = Most_purchased_products();
        include "statistical/list_statistical.php";
    }
    function best_selling_brand(){
        $title = "Thương hiệu bán chạy nhất";
        $list = total_best_selling_brand();
        include "statistical/best_selling_brand.php";
    }