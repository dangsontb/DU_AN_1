<?php

function Most_purchased_products(){
        $sql = "SELECT od.id_product, p.name, od.dongia, p.image,      
                COUNT(od.id_product) AS `luotmua`, 
                SUM(od.soluong) AS 'soluongmua', 
                SUM(od.soluong) *  od.dongia AS 'tonggia'
                FROM order_detail od 
                JOIN product p ON od.id_product = p.product_id 
                GROUP BY od.id_product, p.name
                ORDER BY SUM(od.soluong) DESC;";
        return pdo_query($sql);
}
function doanh_thu_7_ngay_qua(){
        $sql = "SELECT SUM(tong_donhang) AS 'doanhthu' FROM `order` 
                WHERE create_at >= DATE_SUB(NOW(), INTERVAL 7 DAY) AND id_status = 3";
         return pdo_query($sql);
}