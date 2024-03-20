<?php
    include "../model/pdo.php";
    include "../model/category.php";
    include '../model/brand.php';

    include "header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'list_category':
                $list_category = category_select_all();
                include "category/list_cate.php";
                break;
            
            default : include "home.php";
        }
    }else{
        include "home.php";
    }
?>