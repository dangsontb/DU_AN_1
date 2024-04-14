<?php
    function  selling_products(){
        $title = "   Lượt mua sản phẩm";
        $list_selling_products = Most_purchased_products();
        include "statistical/list_statistical.php";
    }