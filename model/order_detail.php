<?php
    function add_order_detail($id_donhang,$id_product,$ten_snpham,$hinhanh,$dongia,$soluong) {
        $sql="INSERT INTO `order_detail`( `id_order`, `id_product`, `soluong`, `dongia`, `hinhanh`, `ten_sanpham`) 
            VALUES ('$id_donhang','$id_product','$soluong','$dongia','$hinhanh','$ten_snpham')";
        pdo_execute($sql);
        
    }
    function history(){
        $sql = "SELECT * 
                FROM `order_detail`
                JOIN `order` ON order_detail.id_order = order.id
                JOIN `status` ON order.id_status = status.status_id";
        return pdo_query($sql);
    
    }



    function countcart()
    {
        $i = 0;
        foreach ($_SESSION['giohang'] as $k => $cart) {
            $i = $i + $_SESSION['giohang'][$k][4];
        }
        return $i;
    }
    function order_detail_by_order_id($id_order_detail){
        $sql = "SELECT * FROM order_detail WHERE id_order = ?";
        return pdo_query($sql,$id_order_detail);
    }
   
?>