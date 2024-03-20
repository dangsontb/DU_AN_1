<?php
    function brand_select_all(){
        $sql = "SELECT * from brand";
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
        $sql = "INSERT into brand(brand_name) value =? ";
        pdo_execute($sql,$brand_name); 
    }
    function brand_update($brand_id,$brand_name){
        $sql = "UPDATE brand set brand_name = ? where brand_id =?";
        pdo_execute($sql,$brand_name,$brand_id);
    }
    
?>