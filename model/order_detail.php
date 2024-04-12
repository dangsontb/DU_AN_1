<?php
    // function add_order_detail($id_donhang,$id_product,$soluong,$dongia,$hinhanh,$ten_sanpham) {
    //     $sql="INSERT INTO `order_detail`( `id_order`, `id_product`, `soluong`, `dongia`, `hinhanh`, `ten_sanpham`) 
    //         VALUES ('$id_donhang','$id_product','$soluong','$dongia','$hinhanh','$ten_sanpham')";
    //     pdo_execute($sql);
        
    // }
    function add_order_detail($id_donhang,$id_product,$soluong,$dongia,$hinhanh,$ten_sanpham) {
        $sql="INSERT INTO order_detail( id_order, id_product, soluong, dongia, hinhanh, ten_sanpham)  VALUES (?,?,?,?,?,?)";
        pdo_execute($sql,$id_donhang,$id_product,$soluong,$dongia,$hinhanh,$ten_sanpham);      
    }


    function history_order_detail($id){
        $sql="SELECT * FROM `order_detail` WHERE id_order=$id";
        return pdo_query($sql);

    } 
    function delete_history_order_detail($id){
         $sql="DELETE FROM `order_detail` WHERE id=$id"; 
         pdo_execute($sql);
    }
    function delete_order_detail_by_id_order($id_order){
         $sql="DELETE FROM `order_detail` WHERE id_order=$id_order"; 
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


    function order_detail_by_order_id($id_order){
        $sql = "SELECT od.*, o.*, u.email FROM order_detail od 
                JOIN `order` o ON od.id_order = o.id
                JOIN `user` u ON u.user_id = o.id_user
                WHERE od.id_order = ?";
        return pdo_query($sql,$id_order);
    }
    function select_product_by_order_id($order_id){
        $sql = "SELECT od.id_product, od.soluong, od.dongia, od.hinhanh, od.ten_sanpham ,p.description, p.sale, p.create_at , p.view , p.cate_id , p.brand_id
                            FROM order_detail od 
                            JOIN `order` o ON od.id_order = o.id
                            JOIN `product` p ON p.product_id = od.id_product
                            where od.id_order = ?";
        return pdo_query($sql,$order_id);
    }
   
?>