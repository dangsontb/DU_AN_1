<?php


    function addtocarrt($id_donhang,$id_product,$ten_snpham,$hinhanh,$dongia,$soluong) {
        $sql="INSERT INTO `cart`( `id_order`, `id_product`, `soluong`, `dongia`, `hinhanh`, `ten_sanpham`) 
            VALUES ('$id_donhang','$id_product','$soluong','$dongia','$hinhanh','$ten_snpham')";
        pdo_execute($sql);
        
    }
    function countcart()
    {
        $i = 0;
        foreach ($_SESSION['giohang'] as $k => $cart) {
            $i = $i + $_SESSION['giohang'][$k][4];
        }
        return $i;
    }
?>