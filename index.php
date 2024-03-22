<?php
    include "model/pdo.php";
    include "model/product.php";
    include "views/header.php";
    include "global.php";
    $spnew=loadall_sanpham_home();

    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'airforce':
                include "views/airforce.php";
                break;
            case 'airjocdan':
                include "views/airjodan.php";
                break;
            case 'dunklowretro':
                include "views/dunklowretro.php";
                break;
        
            default:
                include "views/home.php";
                break;
        }
    }else{
        include "views/home.php";
    }
    include "views/footer.php";
?>