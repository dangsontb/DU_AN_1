<?php
    function brand_select_all(){
        $sql = "SELECT * from brand order by brand_id ";
        return pdo_query($sql);
    }
    function brand_number_pages($list_brands, $quantity_brand){
        $total_brand = count($list_brands);
        return ceil($total_brand/$quantity_brand);
    }
    function brand_select_page($page, $quantity){
        $start = ($page - 1)* $quantity;
        $sql = "SELECT * from brand order by brand_id limit $start, $quantity";
        return pdo_query($sql);
    }
    function brand_select_name($brand_name){
        $sql = "SELECT * from brand where brand_name = ?";
        return pdo_query_one($sql,$brand_name);
    }
    function brand_select_by_id($brand_id){
        $sql = "SELECT * from brand where brand_id = ?";
        return pdo_query_one($sql,$brand_id);
    }
    function brand_insert($brand_name){
        $sql = "INSERT INTO brand(brand_name) value(?) ";
        pdo_execute($sql,$brand_name); 
        return pdo_get_connection() -> lastInsertId();
    }
    function brand_update($brand_id,$brand_name){
        $sql = "UPDATE brand set brand_name = ? where brand_id =?";
        pdo_execute($sql,$brand_name,$brand_id);
    }

    function brand_delete($brand_id){
        if(is_array($brand_id)){
            foreach($brand_id as $id){
                $sql = "DELETE FROM `brand` WHERE brand_id=".$id;
                pdo_execute($sql);
            }       
        }else{
            $sql = "DELETE FROM `brand` WHERE brand_id=".$brand_id;
            pdo_execute($sql);
        }
        
    }
    function pagination(){

    }
    
?>